<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VestibularResource\Pages;
use App\Filament\Resources\VestibularResource\RelationManagers;
use App\Models\Vestibular;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VestibularResource extends Resource
{
    protected static ?string $model = Vestibular::class;

    protected static ?string $modelLabel = 'vestibular';

    protected static ?string $pluralModelLabel = 'vestibulares';

    protected static ?string $slug = 'vestibulares';

    protected static ?string $navigationGroup = 'Painel de Redações';
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome do vestibular')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->label('Nome do vestibular')
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
            'index' => Pages\ListVestibulares::route('/'),
            'create' => Pages\CreateVestibular::route('/create'),
            'edit' => Pages\EditVestibular::route('/{record}/edit'),
        ];
    }
}
