<?php

namespace App;

use App\AuthentificatedUserInterface;

class User implements AuthentificatedUserInterface
{
    public function __construct(private int $id, public string $name)
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setPassword(string $password): void
    {
        $this->password = $password;
    }
}