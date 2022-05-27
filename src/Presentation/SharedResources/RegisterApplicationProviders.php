<?php

namespace HabboStar\Presentation\SharedResources;

use HabboStar\Presentation\SharedResources\Config\ServiceProviderRegistryInterface;
use Illuminate\Contracts\Foundation\Application;

class RegisterApplicationProviders
{
    public function bootstrap(Application $app)
    {
        $providers = call_user_func($app->get(ServiceProviderRegistryInterface::class));
        foreach ($providers as $provider) {
            $app->register($provider);
        }
    }
}
