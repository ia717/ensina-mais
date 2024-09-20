<?php

namespace App\Filament\Resources\QuestionAnswerResource\Pages;

use App\Filament\Resources\QuestionAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateQuestionAnswer extends CreateRecord
{
    protected static string $resource = QuestionAnswerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
