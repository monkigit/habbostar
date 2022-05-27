<?php

declare(strict_types=1);

namespace HabboStar\Application\User\EnterClient;

use HabboStar\Application\User\EnterClient\SSO\SSOTicketGenerator;

final class EnterClientHandler
{
    public function __construct(
        private readonly SSOTicketGenerator $ssoTicketGenerator
    ) { }

    public function handle(EnterClientRequest $enterClientRequest): EnterClientResponse
    {
        // TODO: Get user

        // Generate SSO ticket
        $ssoTicket = $this->ssoTicketGenerator->generateSSOTicket();

        // TODO: Set SSO for user


        return new EnterClientResponse(
            ssoTicket: $ssoTicket
        );
    }
}
