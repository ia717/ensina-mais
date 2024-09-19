<?php

namespace App\Filament\Resources\LessonResource\Pages;

use App\Filament\Resources\LessonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLesson extends EditRecord
{
    protected static string $resource = LessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Aqui chamamos o método fetchAndStoreVideoDurations para atualizar a duração do vídeo
        $this->record->fetchAndStoreVideoDurations();
        // Redirecionamos para a lista de aulas
        $this->redirect($this->getResource()::getUrl('index'));
    }
}
