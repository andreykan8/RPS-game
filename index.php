<?php

declare(strict_types = 1);

require_once './Models/player.php';
require_once './Models/game.php';

function play()
{
    $playerInput = (int)strtolower($_POST['choice']);
    $player = new Player($playerInput - 1);
    $computer = new Player(rand(0, 2));
    $game = new Game($player, $computer);
    return $game->game();
}

if (isset($_POST['choice'])){
    $result = play();
}
?>

<html>
<form action="<?php $_PHP_SELF ?>" method="post">
    <label>
        Make a choice
    </label>
    <input type="text" name="choice">
    <button type="submit">Submit</button>
</form>
<h1>
    <?php
    if ($result){
        echo $result;
    }
    ?>
</h1>

</html>


