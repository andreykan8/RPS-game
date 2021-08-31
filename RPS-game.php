<?php

declare(strict_types = 1);

require_once 'player.php';
require_once 'game.php';

function play()
{
    $playerInput = (int)strtolower(readline('Pick "Rock"(1), "Paper"(2) or "Scissors"(3): '));
    $player = new Player($playerInput - 1);
    $computer = new Player(rand(0, 2));
    $game = new Game($playerInput, $player, $computer);
    return $game->game();
}

echo play();



