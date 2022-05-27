<?php

declare(strict_types=1);

namespace HabboStar\Application\User\EnterClient\SSO;

class SSOTicketGenerator
{
    public function generateSSOTicket(): string
    {
        $sso = "HabboStar";
        $sso .= "-";
        $sso .= bin2hex(random_bytes(32));

        return $sso;
    }
}
