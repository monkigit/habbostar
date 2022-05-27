<?php

namespace HabboStar\Application\User\EnterClient;

class EnterClientRequest
{
    public function __construct(
        public readonly int $userId
    ) { }
}
