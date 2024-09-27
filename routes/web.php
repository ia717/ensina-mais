<?php

use App\Http\Controllers\ProfileController;
use App\Models\TextTheme;
use App\Models\Vestibular;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\LessonController;

Route::get('/', function () {
    return view('login1');
}); // ADICIONAR ->middleware('guest');

Route::get('/disciplinas', [DisciplineController::class, 'index'])->name('disciplinas');
Route::get('/disciplinas/{discipline:slug}', [TopicController::class, 'index'])->name('topicos');
Route::get('/disciplinas/{discipline:slug}/{topic:slug}', [LessonController::class, 'index'])->name('aulas');
Route::get('/disciplinas/{discipline:slug}/{topic:slug}/{lesson:slug}', [LessonController::class, 'show'])->name('conteudo');

Route::get('/questoes', [QuestionController::class, 'index'])->name('questao.index');
Route::post('/questoes/{question}/check', [QuestionController::class, 'checkAnswer'])->name('questions.check');

Route::get('/questaow', function () {
    return view('questaow');
});

Route::get('/questaor', function () {
    return view('questaor');
});


Route::get('/caixafiltros', function () {
    return view('caixafiltros');
});
Route::get('/topicosmaterias', function () {
    return view('topicosmaterias');
});

Route::get('/redacao', function () {
    $vestibulares = Vestibular::all();
    $temaRedacao = TextTheme::all();
    return view('redacao', compact('vestibulares', 'temaRedacao'));
});

Route::get('/redacao2', function () {
    return view('redacao2');
});

Route::get('/redacao3', function () {
    return view('redacao3');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('cronogramamobile', function () {
    return view('cronogramamobile');
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

Route::get('perguntas', function () {
    return view('perguntas');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('usuario', function () {
    return view('usuario');
});
Route::get('simulados', function () {
    return view('simulados');
});

Route::get('simuconcluido', function () {
    return view('simuconcluido');
});

Route::get('cronogramasem', function () {
    return view('cronogramasem');
});


Route::get('areaaluno', function () {
    return view('areaaluno');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/paginainicial', function () {
    return view('paginainicial');
})->name('paginainicial');


// FORUM

// Rotas para perguntas
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index'); // Para exibir o fórum
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store'); // Para armazenar a pergunta

// Rotas para respostas
Route::post('/answers/{questionId}', [ForumController::class, 'storeAnswer'])->name('answers.store');

// Rotas para pegar os tópicos relacionados a uma disciplina
Route::get('/topics/{discipline}', [ForumController::class, 'getTopicsByDiscipline']);
Route::get('/topics-by-discipline/{discipline}', [ForumController::class, 'getTopicsByDiscipline']);



require __DIR__ . '/auth.php';
