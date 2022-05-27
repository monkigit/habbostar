<?php

declare(strict_types=1);

namespace HabboStar\Presentation\Api\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'api' => [],
    ];

    public function boot()
    {
        $this->routes(function () {
            Route::middleware('api')
                ->group(require __DIR__ . '/../routes.php');
        });
    }
}
