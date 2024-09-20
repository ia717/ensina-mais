<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Discipline $disciplina)
    {
        $topicos = $disciplina->topics;
        return view('painel-aulas.topicos', compact('disciplina', 'topicos'));
    }
}
