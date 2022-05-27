<?php

declare(strict_types=1);

namespace HabboStar\Presentation\ModernFlat;

use HabboStar\Presentation\ModernFlat\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

return function(): void {
    Route::get('/', IndexController::class);
};
