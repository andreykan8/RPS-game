<?php

declare(strict_types=1);

require_once 'player.php';

class Game
{

    const OPTIONS = ['rock', 'paper', 'scissors'];
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
                'paper' => 'You lose!' . PHP_EOL,
                'scissors' => 'You win!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 1) {
            return match (self::OPTIONS[$this->computer]) {
                'rock' => 'You win!' . PHP_EOL,
                'paper' => 'Draw!' . PHP_EOL,
                'scissors' => 'You lose!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        } elseif ($this->player === 2) {
            return match (self::OPTIONS[$this->computer]) {
                'rock' => 'You lose!' . PHP_EOL,
                'paper' => 'You win!' . PHP_EOL,
                'scissors' => 'Draw!' . PHP_EOL,
                default => 'Invalid command!' . PHP_EOL,
            };
        }
        return 'Invalid command!';
    }
}