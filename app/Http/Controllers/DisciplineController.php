<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index()
    {
        $categorias = Category::with('disciplines')->get();
        return view('painel-aulas.disciplinas', compact('categorias'));
    }
}
