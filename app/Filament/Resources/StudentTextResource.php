<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentTextResource\Pages;
use App\Filament\Resources\StudentTextResource\RelationManagers;
use App\Models\StudentText;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentTextResource extends Resource
{
    protected static ?string $model = StudentText::class;
    protected static ?string $navigationGroup = 'Redações dos Alunos';

    protected static ?string $modelLabel = 'redação';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('text_title_id')
                    ->label('Título da Redação')
                    ->options(\App\Models\TextTitle::pluck('title', 'id')->toArray())
                    ->required(),
                Forms\Components\Select::make('text_title_id')
                    ->label('Título da Redação')
                    ->options(\App\Models\TextTitle::pluck('title', 'id')->toArray())
                    ->required(),
                Forms\Components\Select::make('text_title_id')
                    ->label('Título da Redação')
                    ->options(\App\Models\TextTitle::pluck('title', 'id')->toArray())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListStudentTexts::route('/'),
            'create' => Pages\CreateStudentText::route('/create'),
            'edit' => Pages\EditStudentText::route('/{record}/edit'),
        ];
    }
}
