<?php

namespace App\Filament\Resources\ExamBoardResource\Pages;

use App\Filament\Resources\ExamBoardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamBoard extends EditRecord
{
    protected static string $resource = ExamBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
