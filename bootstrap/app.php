<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
 * Bootstrap the environment and configuration before the kernel loads.
 */
$bootstrapBeforeKernel = [
    \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
    \Illuminate\Foundation\Bootstrap\LoadConfiguration::class
];

foreach ($bootstrapBeforeKernel as $bootstrapper) {
    $app->make($bootstrapper)->bootstrap($app);
}


/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    \HabboStar\Presentation\SharedResources\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    \HabboStar\Presentation\SharedResources\SharedHttpKernel::class,
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \HabboStar\Presentation\ModernFlat\Exceptions\Handler::class,
);


return $app;
