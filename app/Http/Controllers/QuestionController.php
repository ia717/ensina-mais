<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Discipline;
use App\Models\Topic;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('questao', compact('questions'));
    }

    public function checkAnswer(Question $question, Request $request)
    {   
        $questions = Question::all();
        $inputField = 'options_'.$question->id;      
        $correctAnswerId = $question->answers->where('is_correct', true)->first()->id;
        $studentAnswerId = intval($request->input($inputField));
        return view('questao', compact('questions'), );
        // falta terminar essa lógica
        // no futuro, salvar no banco de dados a resposta do aluno
        if ($studentAnswerId == $correctAnswerId) { 
            alert('Parabéns, você acertou!');
        } else {
            alert('Que pena, você errou!'); 
        }
    }
}