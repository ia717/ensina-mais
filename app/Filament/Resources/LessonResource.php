<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;
    protected static ?string $modelLabel = 'aula';

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationLabel = 'Aulas';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Painel de Aulas';


    protected static ?string $slug = 'aulas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set, Forms\get $get, ) {

                        /*
                            Nota:
                            o $get é uma instância da classe Get que é responsável por pegar o valor de outros campos do formulário
                        
                        */


                        // Se for uma edição não atualiza o campo slug
            
                        if ($operation === 'edit') {
                            return;
                        }
                        $set('slug', Str::slug($state)); // Atualiza o campo slug com o valor do campo name
            
                    }),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('topic_id')
                    ->label('Id do Tópico')
                    ->options(\App\Models\Topic::pluck('name', 'id')->toArray())
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->label('Link da aula')
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->label('Conteúdo')
                    ->nullable(),
                Forms\Components\ToggleButtons::make('is_high_relevance')
                    ->label('Alta Relevância')
                    ->boolean(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('topic.name')
                    ->label('Tópico')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('link')
                    ->label('Link')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order')
                    ->label('Ordem')
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
