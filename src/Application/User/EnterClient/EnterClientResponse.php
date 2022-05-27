<?php

namespace HabboStar\Application\User\EnterClient;

class EnterClientResponse
{
    public function __construct(
        public readonly string $ssoTicket
    ) { }
}
