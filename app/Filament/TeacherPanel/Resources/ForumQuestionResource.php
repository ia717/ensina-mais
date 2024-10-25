<?php

namespace App\Filament\TeacherPanel\Resources;

use App\Filament\TeacherPanel\Resources\ForumQuestionResource\Pages;
use App\Models\QuestionForum;
use App\Models\AnswerForum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Support\View\Components\Modal;
use Filament\Tables;
use Filament\Tables\Table;
use phpDocumentor\Reflection\Types\Void_;



class ForumQuestionResource extends Resource
{
    protected static ?string $model = QuestionForum::class;
    

    protected static ?string $navigationLabel = 'Perguntas do Fórum';
    
    protected static ?string $slug = 'forum-questions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('question')
                    ->label('Pergunta')
                    ->disabled(), // O professor não deve editar a pergunta
                    Forms\Components\RichEditor::make('answer')  // Renomeie aqui
                    ->label('Resposta')
                    ->required(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Aluno')
                    ->sortable(),
                Tables\Columns\TextColumn::make('question')
                    ->label('Pergunta')
                    ->sortable(),
                Tables\Columns\TextColumn::make('discipline.name')
                    ->label('Disciplina')
                    ->sortable(),
                Tables\Columns\TextColumn::make('topic.name')
                    ->label('Tópico')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criada em')
                    ->date(),
                Tables\Columns\TextColumn::make('answer')
                    ->label('Resposta')
                    ->date(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListForumQuestions::route('/'),
            // 'create' => Pages\CreateForumQuestion::route('/create')
            'edit' => Pages\EditForumQuestion::route('/{record}/edit'),
        ];
    }

    

}
