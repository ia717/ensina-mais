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
                Forms\Components\Grid::make()
                    ->schema([

                        Forms\Components\Section::make()
                            ->schema([

                                Forms\Components\Select::make('exam_board_id')
                                    ->label('Banca examinadora')
                                    ->options(ExamBoard::all()->pluck('name', 'id'))
                                    ->nullable()
                                    ->searchable(),

                                Forms\Components\Select::make('discipline_id')
                                    ->label('Disciplina')
                                    ->options(Discipline::all()->pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->reactive(),

                                Forms\Components\Select::make('topic_id')
                                    ->label('Tópico')
                                    ->options(function ($get) {
                                        $disciplineId = $get('discipline_id');
                                        if ($disciplineId) {
                                            return Topic::where('discipline_id', $disciplineId)->pluck('name', 'id');
                                        }
                                        return []; // Retorna um array vazio quando nenhuma disciplina é selecionada
                                    })
                                    ->disabled(function ($get) {
                                        return !$get('discipline_id'); // Desativa o campo se 'discipline_id' não tiver valor
                                    })
                                    ->placeholder(function ($get) {
                                        return !$get('discipline_id') ? '(Opcional) Selecione uma disciplina primeiro' : null;
                                    })
                                    ->nullable()
                                    ->searchable(),


                            ])->columnSpan(1),

                        Forms\Components\Section::make()
                            ->schema([

                                Forms\Components\TextInput::make('type') // Campo de tipo com possibilidade de remoção futura
                                    ->label('Tipo')
                                    ->default('Multipla Escolha'),

                                Forms\Components\Select::make('difficulty_level')
                                    ->label('Nível de dificuldade')
                                    ->options([
                                        'easy' => 'Fácil',
                                        'medium' => 'Médio',
                                        'hard' => 'Difícil',
                                    ])
                                    ->default('medium')
                                    ->required(),
                            ])->columnSpan(1),

                    ])->columns(2), // Grid com duas colunas para melhor visualização do formulário



                // Seção de Respostas com Repeater para múltiplas opções
                Forms\Components\Section::make('Respostas')
                    ->description('Adicione e configure as respostas para esta questão.')
                    ->schema([
                        Forms\Components\RichEditor::make('statement')
                            ->label('Enunciado')
                            ->required()
                            ->columnSpan(2), // Span across two columns for larger fields
                        Forms\Components\Repeater::make('answers')
                            ->relationship('answers')
                            ->label('Respostas')
                            ->schema([
                                Forms\Components\TextInput::make('answer_text')
                                    ->label('Texto')
                                    ->required(),
                                Forms\Components\Checkbox::make('is_correct')
                                    ->label('Correta')
                                    ->default(false)
                                    ->reactive()
                                    ->fixIndistinctState(),

                            ])
                            ->minItems(2)
                            ->maxItems(6)
                            ->required()

                            ->grid(2)
                            ->addActionLabel('Adicionar Resposta'),
                    ])
                    ->collapsible(), // Seção colapsável para melhor visualização do formulário principal

                Forms\Components\TextInput::make('solution')
                    ->label('Solução'),
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
