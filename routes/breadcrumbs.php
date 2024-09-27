<?php // routes/breadcrumbs.php

use App\Models\Discipline;
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

// Home > Disciplinas > [Topicos]
Breadcrumbs::for('topicos', function (BreadcrumbTrail $trail, Discipline $discipline) {
    $trail->parent('disciplinas');
    $trail->push($discipline->name, route('topicos', $discipline));
});