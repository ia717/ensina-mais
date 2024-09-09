<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login1');
});

Route::get('/caixafiltros', function () {
    return view('caixafiltros');
});
Route::get('/questaow', function () {
    return view('questaow');
});

Route::get('/conteudo3', function () {
    return view('conteudo3');
});


Route::get('/questaor', function () {
    return view('questaor');
});
Route::get('/forumduvida', function () {
    return view('forumduvida');
});

Route::get('/redacao', function () {
    return view('redacao');
});

Route::get('/redacao2', function () {
    return view('redacao2');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('paginainicial', function () {
    return view('paginainicial');
});

Route::get('materias', function () {
    $categorias = \App\Models\Category::with('subjects')->get();
    return view('materias', compact('categorias'));
});

Route::get('/materia/{slug}', function($slug) {
    // Busca a matéria pelo slug
    $materia = \App\Models\Subject::where('slug', $slug)->firstOrFail();
    // Puxa os tópicos relacionados à matéria
    $topicos = $materia->topics;
    // Retorna a view com a matéria e os tópicos
    return view('topicos', compact('materia', 'topicos'));
})->name('topicos');

Route::get('/materia/{materia}/{slug}', function($materia, $slug) {
    // Busca o topico pelo slug
    $topico = \App\Models\Topic::where('slug', $slug)->firstOrFail();
    // Puxa as aulas relacionadas ao tópico
    $aulas = $topico->lessons;
    // Retorna a view com o tópico e as aulas
    return view('aulas', compact('topico', 'aulas'));
})->name('aulas');

Route::get('questao', function () {
    return view('questao');
});

Route::get('cronogramamobile', function () {
    return view('cronogramamobile');
});

Route::get('menuteste', function () {
    return view('menuteste');
});
Route::get('calendario', function () {
    return view('calendario');
});

Route::get('menuteste', function () {
    return view('menuteste');
});

Route::get('teste', function () {
    return view('teste');
});

Route::get('cronograma', function () {
    return view('cronograma');
});
Route::get('semana', function () {
    return view('semana');
});


Route::get('aulas', function () {
    $aulas = \App\Models\Lesson::with('topic')->get();
    return view('aulas', compact('aulas'));
});

Route::get('perguntas', function () {
    return view('perguntas');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('usuario', function () {
    return view('usuario');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
