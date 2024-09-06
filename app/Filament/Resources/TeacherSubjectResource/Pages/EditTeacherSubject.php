<?php

namespace App\Filament\Resources\TeacherSubjectResource\Pages;

use App\Filament\Resources\TeacherSubjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherSubject extends EditRecord
{
    protected static string $resource = TeacherSubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
