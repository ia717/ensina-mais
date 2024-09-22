<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextThemeResource\Pages;
use App\Filament\Resources\TextThemeResource\RelationManagers;
use App\Models\TextTheme;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TextThemeResource extends Resource
{
    protected static ?string $model = TextTheme::class;

    protected static ?string $modelLabel = 'tema da redacao';

    protected static ?string $pluralLabel = 'temas das redacoes';

    protected static ?string $slug = 'temas-das-redacoes';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Painel de Redações';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Tema da redação')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Tema das redação')
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
            'index' => Pages\ListTextThemes::route('/'),
            'create' => Pages\CreateTextTheme::route('/create'),
            'edit' => Pages\EditTextTheme::route('/{record}/edit'),
        ];
    }
}
