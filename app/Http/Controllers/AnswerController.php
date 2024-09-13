<?php

namespace App\Http\Controllers;

use App\Models\AnswerForum;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request, $questionId)
    {
        $request->validate([
            'answer' => 'required'
        ]);

        AnswerForum::create([
            'question_forum_id' => $questionId, // Altere para question_forum_id
            'user_id' => auth()->id(),
            'answer' => $request->answer
        ]);

        return back()->with('success', 'Resposta enviada com sucesso!');
    }
}