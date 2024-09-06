<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Filament\Resources\TopicResource\RelationManagers;
use App\Models\Topic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TopicResource extends Resource
{
    protected static ?string $model = Topic::class;
    protected static ?string $modelLabel = 'tópico';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Tópicos';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'Painel de Aulas';


    protected static ?string $slug = 'topicos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set, Forms\get $get, ) {
                    // Se for uma edição não atualiza o campo slug
        
                    if ($operation === 'edit') {
                        return;
                    }
                    $set('slug', Str::slug($state)); // Atualiza o campo slug com o valor do campo name
        
                }),
            Forms\Components\Hidden::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true),
                // ->maxLength(255),
            Forms\Components\Select::make('subject_id')
                ->label('Matéria')
                ->options(\App\Models\Subject::pluck('name', 'id')->toArray())
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Descrição')
                ->nullable(),
            Forms\Components\ToggleButtons::make('is_high_relevance')
                ->label('Alta Relevância')
                ->boolean(),
            Forms\Components\FileUpload::make('image')
                ->label('Imagem')
                ->image()
                ->nullable(),
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
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject.name')
                    ->label('Matéria')
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
            'index' => Pages\ListTopics::route('/'),
            'create' => Pages\CreateTopic::route('/create'),
            'edit' => Pages\EditTopic::route('/{record}/edit'),
        ];
    }
}
