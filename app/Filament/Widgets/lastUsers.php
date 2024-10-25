<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class LastUsers extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return User::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
        ];
    }

    protected function getTableHeading(): string
    {
        return 'Últimos usuários cadastrados';
    }
}