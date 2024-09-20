<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextTitleResource\Pages;
use App\Filament\Resources\TextTitleResource\RelationManagers;
use App\Models\TextTitle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TextTitleResource extends Resource
{
    protected static ?string $model = TextTitle::class;

    protected static ?string $modelLabel = 'titulo da redacão';

    protected static ?string $pluralModelLabel = 'titulos das redacões';

    protected static ?string $slug = 'titulo-das-redacoes';

    protected static ?string $navigationGroup = 'Painel de Redações';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título da redação')
                    ->required(),
                Forms\Components\Select::make('vest_id')
                    ->label('Selecione o Vestibular')
                    ->options(\App\Models\Vestibular::pluck(column: 'name', key: 'id')->toArray())
                    ->required(),
                Forms\Components\Select::make('theme_id')
                    ->label('Selecione o Tema da Redação')
                    ->options(\App\Models\TextTheme::pluck(column: 'name', key: 'id')->toArray())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('title')
                    ->label('Título da redação')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vest_id')
                    ->label('Vestibular')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('theme_id')
                    ->label('Tema da redação')
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
            'index' => Pages\ListTextTitles::route('/'),
            'create' => Pages\CreateTextTitle::route('/create'),
            'edit' => Pages\EditTextTitle::route('/{record}/edit'),
        ];
    }
}
