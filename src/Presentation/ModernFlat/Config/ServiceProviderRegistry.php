<?php

declare(strict_types=1);

namespace HabboStar\Presentation\ModernFlat\Config;

use HabboStar\Presentation\SharedResources\Config\ServiceProviderRegistryInterface;

final class ServiceProviderRegistry implements ServiceProviderRegistryInterface
{
    /**
     * Return all application service providers.
     *
     * @return string[]
     */
    public function __invoke(): array
    {
        return [
            \HabboStar\Presentation\ModernFlat\Providers\RouteServiceProvider::class,
        ];
    }
}
