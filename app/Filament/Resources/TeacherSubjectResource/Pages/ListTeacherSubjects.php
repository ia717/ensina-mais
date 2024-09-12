<?php

namespace App\Filament\Resources\TeacherSubjectResource\Pages;

use App\Filament\Resources\TeacherSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherSubjects extends ListRecords
{
    protected static string $resource = TeacherSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
