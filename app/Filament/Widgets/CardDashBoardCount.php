<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class CardDashBoardCount extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUsers = User::count();
        $totalTeachers = User::where('role', 'professor')->count();
        $totalStudents = User::where('role', 'aluno')->count();

        return [
            Stat::make('Total de usuários', $totalUsers)
                ->description('cadastrados na plataforma')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Professores', $totalTeachers),
            Stat::make('Alunos', $totalStudents)
                ->description('estudando na plataforma')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([4, 5, 15, 1, 22, 2, 16])
                ->color('success'),
            
        ];
    }
}