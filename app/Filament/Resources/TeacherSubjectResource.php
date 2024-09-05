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
use App\Models\User;
use App\Models\Subject;

class TeacherSubjectResource extends Resource
{
    protected static ?string $model = TeacherSubject::class;
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
                Forms\Components\Select::make('subject_id')
                    ->label('Matéria')
                    ->options(Subject::pluck('name', 'id'))
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
                Tables\Columns\TextColumn::make('subject.name')
                    ->label('Matéria')
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
            'index' => Pages\ListTeacherSubjects::route('/'),
            'create' => Pages\CreateTeacherSubject::route('/create'),
            'edit' => Pages\EditTeacherSubject::route('/{record}/edit'),
        ];
    }
}
