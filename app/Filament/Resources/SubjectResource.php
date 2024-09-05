<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubjectResource\Pages;
use App\Filament\Resources\SubjectResource\RelationManagers;
use App\Models\Subject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Components\KeyValueEntry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Str;

class SubjectResource extends Resource
{
    protected static ?string $model = Subject::class;
    protected static ?string $modelLabel = 'matéria';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    // protected static ?string $navigationLabel = 'Matérias';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Painel de Aulas';


    protected static ?string $slug = 'materias';

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
                Forms\Components\TextInput::make('subject_id')
                    ->label('Id da Matéria')
                    ->required()
                    ->maxLength(255)
                    ->Unique(),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Descrição')
                    ->nullable(),
                Forms\Components\Select::make('category_id')
                    ->label('Categoria')
                    ->options(\App\Models\Category::pluck('name', 'id')->toArray())
                    ->required(),
                Forms\Components\TextInput::make('material_link')
                    ->label('Link do Material')
                    ->url() // valida se realmente é uma URL
                    ->required(),
                Forms\Components\TextInput::make('material_info')
                    ->label('Informações do Material')
                    ->required()
                    ->maxLength(550),

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
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoria')
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
            'index' => Pages\ListSubjects::route('/'),
            'create' => Pages\CreateSubject::route('/create'),
            'edit' => Pages\EditSubject::route('/{record}/edit'),
        ];
    }
}
