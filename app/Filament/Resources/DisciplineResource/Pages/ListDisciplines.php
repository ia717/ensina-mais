<?php

namespace App\Filament\Resources\DisciplineResource\Pages;

use App\Filament\Resources\DisciplineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisciplines extends ListRecords
{
    protected static string $resource = DisciplineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
