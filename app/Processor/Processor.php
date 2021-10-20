<?php

declare(strict_types=1);

namespace App\Processor;
use App\Models\Player;
use App\Models\Game;

class Processor
{
    public static string $result = 'Make a choice!';

    public function process()
    {
        if (isset($_POST['choice'])) {
            $player = new Player((int)$_POST['choice']);
            $computer = new Player(rand(0, 2));
            $game = new Game($player, $computer);
            static::$result = '<h1 class="result">' . $game->game() . '</h1>';
        }
    }
}
