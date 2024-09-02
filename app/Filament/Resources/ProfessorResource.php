<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfessorResource\Pages;
use App\Filament\Resources\ProfessorResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfessorResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $modelLabel = 'professor';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function query(): Builder
    {
        // Filtra para mostrar apenas usuários com o papel de "professor"
        return parent::query()->where('role', 'professor');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('prof_id')
                    ->label('Id do Professor')
                    ->options(\App\Models\TeacherSubject::pluck('name', 'id')->toArray())
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
            'index' => Pages\ListProfessors::route('/'),
            'create' => Pages\CreateProfessor::route('/create'),
            'edit' => Pages\EditProfessor::route('/{record}/edit'),
        ];
    }
}
