<?php

declare(strict_types=1);

namespace HabboStar\Domain\ValueObjects;

use InvalidArgumentException;

class Username
{
    public readonly string $username;

    private string $allowedCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-@!";

    public function __construct(string $username)
    {
        if (strlen($username) < 3 || strlen($username) > 15) {
            throw new InvalidArgumentException("Username is too small or too big. Min size is 3 and max size is 15");
        }

        foreach (str_split($username) as $characterInName) {
            if (!str_contains($this->allowedCharacters, $characterInName)){
                throw new InvalidArgumentException("Character {$characterInName} is not allowed");
            }
        }

        $this->username = $username;
    }

    public function equal(Username $valueObject): bool
    {
        return $valueObject->username == $this->username;
    }

    public function __toString(): string
    {
        return $this->username;
    }
}
