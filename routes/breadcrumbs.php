<?php // routes/breadcrumbs.php

use App\Models\Discipline;
use App\Models\Topic;
use App\Models\Lesson;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Disciplinas
Breadcrumbs::for('disciplinas', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Disciplinas', route('disciplinas'));
});

// Home > Disciplinas > [Disciplina]
Breadcrumbs::for('topicos', function (BreadcrumbTrail $trail, Discipline $discipline) {
    $trail->parent('disciplinas');
    $trail->push($discipline->name, route('topicos', $discipline));
});

// Home > Disciplinas > [Disciplina] > [Tópico]
Breadcrumbs::for('aulas', function (BreadcrumbTrail $trail, Discipline $discipline, Topic $topic) {
    $trail->parent('topicos', $discipline);
    $trail->push($topic->name, route('aulas', [$discipline, $topic]));
});

// Home > Disciplinas > [Disciplina] > [Tópico] > [Aula]
Breadcrumbs::for('conteudo', function (BreadcrumbTrail $trail, Discipline $discipline, Topic $topic, Lesson $lesson) {
    $trail->parent('aulas', $discipline, $topic);
    $trail->push($lesson->name, route('conteudo', [$discipline, $topic, $lesson]));
});



