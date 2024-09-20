<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisciplineResource\Pages;
use App\Filament\Resources\DisciplineResource\RelationManagers;
use App\Models\Discipline;
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
use App\Models\Category;
use Filament\Tables\Filters\SelectFilter;
use Filament\Support\Enums\MaxWidth;
use Livewire\Attributes\Layout;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;

class DisciplineResource extends Resource
{
    protected static ?string $model = Discipline::class;
    protected static ?string $modelLabel = 'disciplina';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'Painel de Aulas';


    protected static ?string $slug = 'disciplinas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true),
                // ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set, Forms\get $get, ) {

                //     // Se for uma edição não atualiza o campo slug
                //     if ($operation === 'edit') {
                //         return;
                //     }

                //     $set('slug', Str::slug($state)); // Atualiza o campo slug com o valor do campo name

                // }),
                // Forms\Components\Hidden::make('slug')
                //     ->label('Slug')
                //     ->required(),
                // ->maxLength(255),
                Forms\Components\Select::make('category_id')
                    ->label('Categoria')
                    ->options(\App\Models\Category::pluck('name', 'id')->toArray())
                    ->required(),
                // Forms\Components\Textarea::make('description')
                //     ->label('Descrição')
                //     ->nullable(),
                Forms\Components\Section::make('Material de Apoio')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('material_link')
                            ->label('Link do Material')
                            ->url(), // valida se realmente é uma URL
                        Forms\Components\TextInput::make('material_info')
                            ->label('Informações do Material')
                            ->maxLength(550),
                    ]),

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
                // Tables\Columns\TextColumn::make('slug')
                //     ->label('Slug')
                //     ->searchable()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoria')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters(
                [
                  
                    SelectFilter::make('category_id')
                        ->label('Categoria')
                            ->options(fn() => Category::pluck('name', 'id')->toArray()
                        )


                ],
                layout: FiltersLayout::AboveContent

            )


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
            'index' => Pages\ListDisciplines::route('/'),
            'create' => Pages\CreateDiscipline::route('/create'),
            'edit' => Pages\EditDiscipline::route('/{record}/edit'),
        ];
    }
}
