<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherDisciplineResource\Pages;
use App\Filament\Resources\TeacherDisciplineResource\RelationManagers;
use App\Models\TeacherDiscipline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\User;
use App\Models\Discipline;

class TeacherDisciplineResource extends Resource
{
    protected static ?string $model = TeacherDiscipline::class;
    protected static ?string $modelLabel = 'professor(a)';


    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Professores';

    protected static ?string $slug = 'professores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Professor(a)')
                    ->options(User::where('role', 'professor')->pluck('name', 'id'))
                    ->required(),
                Forms\Components\Select::make('discipline_id')
                    ->label('Disciplina')
                    ->options(Discipline::pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Professor(a)')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discipline.name')
                    ->label('Disciplina')
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
            'index' => Pages\ListTeacherDisciplines::route('/'),
            'create' => Pages\CreateTeacherDiscipline::route('/create'),
            'edit' => Pages\EditTeacherDiscipline::route('/{record}/edit'),
        ];
    }
}
