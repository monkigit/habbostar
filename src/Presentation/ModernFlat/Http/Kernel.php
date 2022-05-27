<?php

namespace HabboStar\Presentation\ModernFlat\Http;

use HabboStar\Presentation\SharedResources\SharedHttpKernel;

class Kernel extends SharedHttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \HabboStar\Presentation\SharedResources\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \HabboStar\Presentation\SharedResources\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
}
