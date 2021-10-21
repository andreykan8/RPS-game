<?php

declare(strict_types=1);

namespace App\Processor;
use App\Models\Player;
use App\Models\Game;

class Processor
{
    public static string $result = 'Make a choice!';
    public static string $display = '';

    public function process()
    {
        if (isset($_POST['choice'])) {
            $player = new Player((int)$_POST['choice']);
            $computer = new Player(rand(0, 4));
            $game = new Game($player, $computer);
            static::$result = '<h1 class="result">' . $game->game() . '</h1>';
            switch ($player->getChoice()) {
                case '0':
                    static::$display .= '<div class="display-player"><h3 class="display-text">Player</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/rock.png" alt="rock-image" width="100" height="97"></div>';
                    break;
                case '1':
                    static::$display .= '<div class="display-player"><h3 class="display-text">Player</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/paper.png" alt="paper-image" width="100" height="97"></div>';
                    break;
                case '2':
                    static::$display .= '<div class="display-player"><h3 class="display-text">Player</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/scissors.png" alt="scissors-image" width="100" height="97"></div>';
                    break;
                case '3':
                    static::$display .= '<div class="display-player"><h3 class="display-text">Player</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/lizard.jpeg" alt="lizard-image" width="100" height="97"></div>';
                    break;
                case '4':
                    static::$display .= '<div class="display-player"><h3 class="display-text">Player</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/spok.png" alt="spok-image" width="100" height="97"></div>';
                    break;
                default:
                    static::$display = '';
            }
            switch ($computer->getChoice()) {
                case '0':
                    static::$display .= '<div class="display-computer"><h3 class="display-text">Computer</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/rock.png" alt="rock-image" width="100" height="97"></div>';
                    break;
                case '1':
                    static::$display .= '<div class="display-computer"><h3 class="display-text">Computer</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/paper.png" alt="paper-image" width="100" height="97"></div>';
                    break;
                case '2':
                    static::$display .= '<div class="display-computer"><h3 class="display-text">Computer</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/scissors.png" alt="scissors-image" width="100" height="97"></div>';
                    break;
                case '3':
                    static::$display .= '<div class="display-computer"><h3 class="display-text">Computer</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/lizard.jpeg" alt="lizard-image" width="100" height="97"></div>';
                    break;
                case '4':
                    static::$display .= '<div class="display-computer"><h3 class="display-text">Computer</h3>' . PHP_EOL .
                        '<img class="display" src="/app/Images/spok.png" alt="spok-image" width="100" height="97"></div>';
                    break;
                default:
                    static::$display = '';
            }
        }
    }
}
