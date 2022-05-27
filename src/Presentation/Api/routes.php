<?php

declare(strict_types=1);

namespace HabboStar\Presentation\Api;


use HabboStar\Presentation\Api\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

return function(): void {
    Route::get('/', LoginController::class);
};
