<?php

namespace App\Filament\Resources\DisciplineResource\Pages;

use App\Filament\Resources\DisciplineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscipline extends EditRecord
{
    protected static string $resource = DisciplineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
