<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Discipline;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('questao', compact('questions'));
    }
}