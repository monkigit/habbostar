<?php

declare(strict_types=1);

namespace HabboStar\Presentation\ModernFlat\Http\Controllers;

final class IndexController
{
    public function __invoke()
    {
        return env('THEME');
    }
}
