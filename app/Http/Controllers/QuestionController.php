<?php

namespace App\Http\Controllers;

use App\Models\QuestionForum;
use App\Models\Discipline;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = QuestionForum::with(['user', 'discipline', 'topic', 'answers.user'])
            ->get();

        $disciplines = Discipline::all();
        $topics = Topic::all();

        return view('forum', compact('questions', 'disciplines', 'topics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'discipline_id' => 'required|exists:disciplines,id',
            'topic_id' => 'nullable|exists:topics,id',
            'question' => 'required|string'
        ]);

        QuestionForum::create([
            'user_id' => Auth::id(),
            'discipline_id' => $request->discipline_id,
            'topic_id' => $request->topic_id,
            'question' => $request->question
        ]);

        return redirect()->route('forum')->with('success', 'Pergunta enviada com sucesso!');
    }
}