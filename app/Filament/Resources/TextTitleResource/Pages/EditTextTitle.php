<?php

namespace App\Filament\Resources\TextTitleResource\Pages;

use App\Filament\Resources\TextTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextTitle extends EditRecord
{
    protected static string $resource = TextTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
