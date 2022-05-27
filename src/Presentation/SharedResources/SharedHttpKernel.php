<?php

declare(strict_types=1);

namespace HabboStar\Presentation\SharedResources;

use Illuminate\Foundation\Bootstrap\BootProviders;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Illuminate\Foundation\Http\Kernel;

class SharedHttpKernel extends Kernel
{
    protected $bootstrappers = [
        HandleExceptions::class,
        RegisterFacades::class,
        RegisterProviders::class,
        RegisterApplicationProviders::class,
        BootProviders::class,
    ];
}
