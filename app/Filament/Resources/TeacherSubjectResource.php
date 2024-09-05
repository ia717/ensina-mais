<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherSubjectResource\Pages;
use App\Filament\Resources\TeacherSubjectResource\RelationManagers;
use App\Models\TeacherSubject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherSubjectResource extends Resource
{
    protected static ?string $model = TeacherSubject::class;
    
    protected static ?string $modelLabel = 'professor';

    protected static ?string $navigationLabel = 'Professores';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListTeacherSubjects::route('/'),
            'create' => Pages\CreateTeacherSubject::route('/create'),
            'edit' => Pages\EditTeacherSubject::route('/{record}/edit'),
        ];
    }
}
