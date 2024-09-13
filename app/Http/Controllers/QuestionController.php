<?php

namespace App\Http\Controllers;

use App\Models\QuestionForum;
use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // $questions = QuestionForum::with(['user', 'subject', 'topic']) // , 'answers.user'
        //     ->get();
        $questions = QuestionForum::all();
        $subjects = Subject::all();
        $topics = Topic::all();

        return view('forum', compact('questions', 'subjects', 'topics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'topic_id' => 'required|exists:topics,id',
            'question' => 'required|string'
        ]);

        QuestionForum::create([
            'user_id' => auth()->id(),
            'subject_id' => $request->subject_id,
            'topic_id' => $request->topic_id,
            'question' => $request->question
        ]);

        return redirect()->route('forum')->with('success', 'Pergunta enviada com sucesso!');
    }
}