<?php

namespace App\Filament\TeacherPanel\Resources\ForumQuestionResource\Pages;

use App\Filament\TeacherPanel\Resources\ForumQuestionResource;
use App\Models\QuestionAnswer; // Importar a model QuestionAnswer
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForumQuestion extends EditRecord
{
    protected static string $resource = ForumQuestionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\SubmitAction::make(), // Alterar de SaveAction para SubmitAction
        ];
    }

    protected function afterSave(): void
    {
        // Cria uma nova resposta para a pergunta
        QuestionAnswer::create([
            'question_id' => $this->record->id, // ID da pergunta
            'answer_text' => $this->form->getState()['answer_text'], // Texto da resposta
            'is_correct' => $this->form->getState()['is_correct'] ?? false, // Se a resposta é correta
        ]);
    }
}
