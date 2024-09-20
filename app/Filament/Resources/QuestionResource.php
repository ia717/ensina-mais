<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Discipline;
use App\Models\Topic;
use App\Models\ExamBoard;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;
    protected static ?string $modelLabel = 'questão';
    protected static ?string $pluralModelLabel = 'questões';
    protected static ?string $slug = 'questoes';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Banco de Questões';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('statement')
                    ->label('Enunciado')
                    ->required(),
                Forms\Components\TextInput::make('type') // nao sei se vou manter
                    ->label('Tipo')
                    ->default('multiple_choice'),
                Forms\Components\Select::make('difficulty_level')
                    ->label('Nível de dificuldade')
                    ->options([
                        'easy' => 'Fácil',
                        'medium' => 'Médio',
                        'hard' => 'Difícil',
                    ])
                    ->default('medium')
                    ->required(),
                Forms\Components\TextInput::make('solution')
                    ->label('Solução'),
                Forms\Components\Select::make('discipline_id')
                    ->label('Disciplina')
                    ->options(Discipline::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('topic_id') // adicionar restrição para pegar apenas topics dentro de disciplines
                    ->label('Tópico')
                    ->options(Topic::all()->pluck('name', 'id'))
                    ->nullable()
                    ->searchable(),
                Forms\Components\Select::make('exam_board_id')
                    ->label('Banca examinadora')
                    ->options(ExamBoard::all()->pluck('name', 'id'))
                    ->nullable()
                    ->searchable(),
                Forms\Components\Section::make('answers')
                    ->label('Respostas')
                    ->schema([
                        
                        Forms\Components\Checkbox::make('is_correct')
                            ->label('Correta')
                            ->default(false),
                    ]),
                Forms\Components\Repeater::make('answers')
                    ->relationship('answers')
                    ->label('Respostas')
                    ->schema([
                        Forms\Components\TextInput::make('text')
                            ->label('Texto')
                            ->required(),
                        Forms\Components\Checkbox::make('is_correct')
                            ->label('Correta')
                            ->default(false),
                    ])
                    
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('statement')
                    ->label('Enunciado')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
