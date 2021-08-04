<?php

declare(strict_types = 1);

$options = ['rock', 'paper', 'scissors'];
$playerInput = strtolower(readline('Pick "Rock", "Paper" or "Scissors": '));
$computerChoice = rand(0, 2);

if ($playerInput === 'rock') {
    switch ($options[$computerChoice]) {
        case 'rock':
            echo 'Draw!' . PHP_EOL;
            break;
        case 'paper':
            echo 'You lose!' . PHP_EOL;
            break;
        case 'scissors':
            echo 'You win!' . PHP_EOL;
            break;
        default:
            echo 'Invalid command!' . PHP_EOL;
            break;
    }
} elseif ($playerInput === 'paper') {
    switch ($options[$computerChoice]) {
        case 'rock':
            echo 'You win!' . PHP_EOL;
            break;
        case 'paper':
            echo 'Draw!' . PHP_EOL;
            break;
        case 'scissors':
            echo 'You lose!' . PHP_EOL;
            break;
        default:
            echo 'Invalid command!' . PHP_EOL;
            break;
    }
} elseif ($playerInput === 'scissors') {
    switch ($options[$computerChoice]) {
        case 'rock':
            echo 'You lose!' . PHP_EOL;
            break;
        case 'paper':
            echo 'You win!' . PHP_EOL;
            break;
        case 'scissors':
            echo 'Draw!' . PHP_EOL;
            break;
        default:
            echo 'Invalid command!' . PHP_EOL;
            break;
    }
}

