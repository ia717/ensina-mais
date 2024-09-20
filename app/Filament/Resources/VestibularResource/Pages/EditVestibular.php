<?php

namespace App\Filament\Resources\VestibularResource\Pages;

use App\Filament\Resources\VestibularResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVestibular extends EditRecord
{
    protected static string $resource = VestibularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
