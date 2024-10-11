<?php

namespace App\Filament\TeacherPanel\Resources\ForumQuestionResource\Pages;

use App\Filament\TeacherPanel\Resources\ForumQuestionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForumQuestions extends ListRecords
{
    protected static string $resource = ForumQuestionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
