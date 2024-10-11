<?php

namespace App\Http\Controllers;

use App\Models\QuestionForum;
use App\Models\Discipline;
use App\Models\Topic;
use App\Models\AnswerForum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    // Método para exibir as perguntas e aplicar filtros
    public function index(Request $request)
    {
        // Obtenha os filtros da requisição
        $disciplineId = $request->input('discipline_id');
        $topicId = $request->input('topic_id');

        // Comece a query com todas as perguntas
        $query = QuestionForum::query();

        // Aplique o filtro de disciplina se foi selecionado
        if ($disciplineId) {
            $query->where('discipline_id', $disciplineId);
        }

        // Aplique o filtro de tópico se foi selecionado
        if ($topicId) {
            $query->where('topic_id', $topicId);
        }

        // Obtenha as perguntas filtradas e carregue os relacionamentos necessários
        $questions = $query->with(['user', 'discipline.category', 'topic', 'answers.user'])->get();

        // Obtenha as disciplinas e tópicos para preencher os selects no frontend
        $disciplines = Discipline::all();
        $topics = Topic::all();

        return view('forum', compact('questions', 'disciplines', 'topics'));
    }

    // Método para armazenar uma nova pergunta
    public function store(Request $request)
    {
        // Validação dos dados da requisição
        $request->validate([
            'discipline_id' => 'required|exists:disciplines,id',
            'topic_id' => 'nullable|exists:topics,id',
            'question' => 'required|string'
        ]);

        // Criação de uma nova pergunta no banco de dados
        QuestionForum::create([
            'user_id' => Auth::id(),
            'discipline_id' => $request->discipline_id,
            'topic_id' => $request->topic_id,
            'question' => $request->question
        ]);

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('forum.index')->with('success', 'Pergunta enviada com sucesso!');
    }

    public function getTopicsByDiscipline($disciplineId)
    {
        $topics = Topic::where('discipline_id', $disciplineId)->get();
        return response()->json($topics);
    }

    public function storeAnswer(Request $request, $questionId)
    {
        $request->validate([
            'answer' => 'required'
        ]);

        AnswerForum::create([
            'question_forum_id' => $questionId, // Usando o ID da pergunta passado pela URL
            'user_id' => Auth::id(),
            'answer' => $request->answer
        ]);

        return back()->with('success', 'Resposta enviada com sucesso!');
    }
}
