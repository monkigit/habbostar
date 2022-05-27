<?php

declare(strict_types=1);

namespace HabboStar\Presentation\Api\Config;

use HabboStar\Presentation\SharedResources\Config\ServiceProviderRegistryInterface;

final class ServiceProviderRegistry implements ServiceProviderRegistryInterface
{

    public function __invoke(): array
    {
        return [
            \HabboStar\Presentation\Api\Providers\RouteServiceProvider::class,
        ];
    }
}
