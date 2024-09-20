<?php

namespace App\Filament\Resources\TextTitleResource\Pages;

use App\Filament\Resources\TextTitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextTitles extends ListRecords
{
    protected static string $resource = TextTitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
