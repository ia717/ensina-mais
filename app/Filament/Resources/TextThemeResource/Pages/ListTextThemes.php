<?php

namespace App\Filament\Resources\TextThemeResource\Pages;

use App\Filament\Resources\TextThemeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextThemes extends ListRecords
{
    protected static string $resource = TextThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
