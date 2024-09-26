<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Topic;
use App\Models\Lesson;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use App\Models\Category;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Discipline $discipline, Topic $topic)
    {
        $lessons = $topic->lessons;
        return view('painel-aulas.aulas', compact('topic', 'lessons',));
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline, Topic $topic, Lesson $lesson, Category $category)
    {
        $link = $lesson->link;


        $correctLink = $this->formatarLink($link);
        $color = $lesson->topic->discipline->category->color;
        $discipline = $discipline->name;
        $topic = $topic->name;

        return view('painel-aulas.conteudo', compact('lesson', 'correctLink', 'color', 'discipline', 'topic'));
    }

    //* Função para formatar o link do youtube
    private function formatarLink($link)
    {
        if (strpos($link, 'watch?v=') !== false) {
            $link = explode('watch?v=', $link)[1];
            $link = explode('&', $link)[0];
            return 'https://www.youtube.com/embed/' . $link;
        }
        return $link;
    }
}
