<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Topic;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Discipline $discipline, Topic $topic)
    {
        $lessons = $topic->lessons;
        return view('painel-aulas.aulas', compact('topic', 'lessons'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline, Topic $topic, Lesson $lesson)
    {
        $corCategoria = $discipline->category->color;
        $aula = $lesson;
        return view('painel-aulas.conteudo3', compact('aula', 'corCategoria'));
    }
}
