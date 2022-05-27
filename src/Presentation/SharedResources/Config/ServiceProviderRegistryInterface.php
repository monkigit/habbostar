<?php

declare(strict_types=1);

namespace HabboStar\Presentation\SharedResources\Config;

interface ServiceProviderRegistryInterface
{
    /**
     * Return a list with application service providers.
     *
     * @return array
     */
    public function __invoke(): array;
}
