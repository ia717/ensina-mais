<?php

namespace App\Filament\Resources\TeacherDisciplineResource\Pages;

use App\Filament\Resources\TeacherDisciplineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherDisciplines extends ListRecords
{
    protected static string $resource = TeacherDisciplineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
