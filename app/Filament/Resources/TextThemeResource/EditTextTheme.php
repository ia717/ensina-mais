<?php

namespace App\Filament\Resources\TextThemeResource\Pages;

use App\Filament\Resources\TextThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextTheme extends EditRecord
{
    protected static string $resource = TextThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
