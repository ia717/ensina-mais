<?php

namespace App\Filament\Resources\ExamBoardResource\Pages;

use App\Filament\Resources\ExamBoardResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamBoard extends CreateRecord
{
    protected static string $resource = ExamBoardResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
