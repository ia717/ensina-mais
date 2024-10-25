<?php

namespace App\Filament\TeacherPanel\Resources\ForumQuestionResource\Pages;

use App\Filament\TeacherPanel\Resources\ForumQuestionResource;
use App\Models\AnswerForum; // Importar a model QuestionAnswer
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;



class EditForumQuestion extends EditRecord
{
    protected static ?string $model = AnswerForum::class;
    protected static string $resource = ForumQuestionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(), // Alterar de SaveAction para SubmitAction
        ];
    }

    protected function afterSave(): void
    {
        // Cria uma nova resposta para a pergunta
        AnswerForum::create([
            'question_forum_id' => $this->record->id, // ID da pergunta
            'user_id' => Auth::id(),
            'answer' => $this->form->getState()['answer'], // Texto da resposta
        ]);

        
    }
}
