<?php

namespace App\Filament\Resources\ExamBoardResource\Pages;

use App\Filament\Resources\ExamBoardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamBoards extends ListRecords
{
    protected static string $resource = ExamBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
