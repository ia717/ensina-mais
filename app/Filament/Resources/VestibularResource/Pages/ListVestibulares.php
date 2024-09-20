<?php

namespace App\Filament\Resources\VestibularResource\Pages;

use App\Filament\Resources\VestibularResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVestibulares extends ListRecords
{
    protected static string $resource = VestibularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
