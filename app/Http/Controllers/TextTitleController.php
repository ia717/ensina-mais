<?php

namespace App\Http\Controllers;

use App\Models\StudentText;
use App\Models\TextTheme;
use App\Models\User;
use App\Models\TextTitle;
use App\Models\Vestibular;
use Illuminate\Http\Request;

class TextTitleController extends Controller
{
    
    public function index(Request $request)
    {
    
        $titulos = TextTitle::with('textTheme', 'vestibular')->get();

        
        return view('redacao', compact('titulos'));

    }
}
