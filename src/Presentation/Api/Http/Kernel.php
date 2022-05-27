<?php

namespace HabboStar\Presentation\Api\Http;

use HabboStar\Presentation\SharedResources\SharedHttpKernel;

class Kernel extends SharedHttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \HabboStar\Presentation\SharedResources\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \HabboStar\Presentation\SharedResources\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \HabboStar\Presentation\SharedResources\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    protected $middlewareGroups = [
        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
}
