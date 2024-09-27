<?php

namespace App\Filament\TeacherPanel\Resources;

use App\Filament\TeacherPanel\Resources\ForumQuestionResource\Pages;
use App\Models\QuestionForum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

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
                Forms\Components\TextArea::make('answer')
                    ->label('Resposta')
                    ->required(),
            ]);
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
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'create' => Pages\CreateForumQuestion::route('/create'),
            'edit' => Pages\EditForumQuestion::route('/{record}/edit'),
        ];
    }
}
