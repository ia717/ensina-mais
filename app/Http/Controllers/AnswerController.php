<?php

namespace App\Http\Controllers;

use App\Models\AnswerForum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request, $questionId)
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