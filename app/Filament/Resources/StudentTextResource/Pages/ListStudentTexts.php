<?php

namespace App\Filament\Resources\StudentTextResource\Pages;

use App\Filament\Resources\StudentTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentTexts extends ListRecords
{
    protected static string $resource = StudentTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
