<?php

declare(strict_types=1);

namespace App\Models;

class Game
{

    const OPTIONS = ['rock', 'paper', 'scissors', 'lizard', 'spok'];
    private int $player;
    private int $computer;

    public function __construct(Player $player, Player $computer)
    {
        $this->player = $player->getChoice();
        $this->computer = $computer->getChoice();
    }

    public function game(): string
    {
        if ($this->player === 0) {
            return match (self::OPTIONS[$this->computer]) {
                'rock' => 'Draw!' . PHP_EOL,
                'paper', 'spok' => 'You lose!' . PHP_EOL,
                'scissors', 'lizard' => 'You win!' . PHP_EOL,

                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 1) {
            return match (self::OPTIONS[$this->computer]) {
                'rock', 'spok' => 'You win!' . PHP_EOL,
                'paper' => 'Draw!' . PHP_EOL,
                'scissors', 'lizard' => 'You lose!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 2) {
            return match (self::OPTIONS[$this->computer]) {
                'rock', 'spok' => 'You lose!' . PHP_EOL,
                'paper', 'lizard' => 'You win!' . PHP_EOL,
                'scissors' => 'Draw!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 3) {
            return match (self::OPTIONS[$this->computer]) {
                'rock', 'scissors' => 'You lose!' . PHP_EOL,
                'spok', 'paper' => 'You win!' . PHP_EOL,
                'lizard' => 'Draw!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 4) {
            return match (self::OPTIONS[$this->computer]) {
                'paper', 'lizard' => 'You lose!' . PHP_EOL,
                'rock', 'scissors' => 'You win!' . PHP_EOL,
                'spok' => 'Draw!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        }
        return 'Invalid command!';
    }
}