<?php

namespace App\Filament\Resources\TeacherDisciplineResource\Pages;

use App\Filament\Resources\TeacherDisciplineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherDiscipline extends EditRecord
{
    protected static string $resource = TeacherDisciplineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
