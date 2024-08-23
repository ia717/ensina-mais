<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('aula', function () {
    return view('aula');
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
