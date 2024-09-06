<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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


Route::get('/login2', function () {
    return view('login2');
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
    return view('materias');
});

Route::get('questao', function () {
    return view('questao');
});

Route::get('cronograma', function () {
    return view('cronograma');
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


Route::get('aula', function () {
    return view('aula');
});

Route::get('perguntas', function () {
    return view('perguntas');
});

Route::get('matematica', function () {
    return view('matematica');
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
