<?php

declare(strict_types=1);

namespace HabboStar\Presentation\ModernFlat;

use HabboStar\Presentation\ModernFlat\Http\Controllers\IndexController;
use Illuminate\Routing\Router;

return function (): void {
    /** @var Router $router */
    $router = app()->make(Router::class);

    $router->get('/', IndexController::class);
};
