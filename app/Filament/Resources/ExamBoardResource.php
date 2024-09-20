<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamBoardResource\Pages;
use App\Filament\Resources\ExamBoardResource\RelationManagers;
use App\Models\ExamBoard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamBoardResource extends Resource
{
    protected static ?string $model = ExamBoard::class;
    protected static ?string $modelLabel = 'banca examinadora';
    protected static ?string $pluralModelLabel = 'bancas examinadoras';
    protected static ?string $slug = 'banca-examinadora';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Banco de Questões';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
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
            'index' => Pages\ListExamBoards::route('/'),
            'create' => Pages\CreateExamBoard::route('/create'),
            'edit' => Pages\EditExamBoard::route('/{record}/edit'),
        ];
    }
}
