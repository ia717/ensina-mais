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
    public function index(Discipline $disciplina, Topic $topico)
    {
        $aulas = $topico->lessons;
        return view('painel-aulas.aulas', compact('topico', 'aulas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $disciplina, Topic $topico, Lesson $aula)
    {
        $corCategoria = $disciplina->category->color;
        return view('painel-aulas.conteudo3', compact('aula', 'corCategoria'));
    }
}
