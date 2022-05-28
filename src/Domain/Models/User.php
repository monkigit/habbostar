<?php

declare(strict_types=1);

namespace HabboStar\Domain\Models;

use HabboStar\Domain\ValueObjects\Username;

class User
{
    private int $id;

    public function __construct(
        private readonly Username $user,
        private readonly string $password,
        private readonly string $gender
    ) { }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getGender(): string
    {
        return $this->gender;
    }
}
