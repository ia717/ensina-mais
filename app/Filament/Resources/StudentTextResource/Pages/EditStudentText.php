<?php

namespace App\Filament\Resources\StudentTextResource\Pages;

use App\Filament\Resources\StudentTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentText extends EditRecord
{
    protected static string $resource = StudentTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
