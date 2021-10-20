<?php

declare(strict_types=1);

namespace App\Models;

class Player
{
    private int $choice;

    public function __construct(int $choice)
    {
        $this->choice = $choice;
    }

    public function getChoice(): int
    {
        return $this->choice;
    }
}