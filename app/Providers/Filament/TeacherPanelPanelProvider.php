<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Resources\LessonResource; 
use App\Filament\Resources\TopicResource;
use App\Http\Middleware\CheckTeacherPanelAccess;
use App\Policies\TeacherPanelPolicy;
use App\Models\User;
use App\Filament\TeacherPanel\Resources\ForumQuestionResource;



class TeacherPanelPanelProvider extends PanelProvider
{
    protected $policies = [
        User::class => TeacherPanelPolicy::class,
    ];

    
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('teacherPanel')
            ->login()
            ->resources([
                LessonResource::class,
                TopicResource::class,
                ForumQuestionResource::class,
            ])
            ->path('teacherPanel')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->brandLogo(asset('images/logos/logo-ensina-claro.png'))
            ->discoverResources(in: app_path('Filament/TeacherPanel/Resources'), for: 'App\\Filament\\TeacherPanel\\Resources')
            ->discoverPages(in: app_path('Filament/TeacherPanel/Pages'), for: 'App\\Filament\\TeacherPanel\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/TeacherPanel/Widgets'), for: 'App\\Filament\\TeacherPanel\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                CheckTeacherPanelAccess::class, // Adicione esta linha
            ]);
    }
}