<?php

declare(strict_types=1);

use App\Processor\Processor;
unset($_POST['choice']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPS</title>
    <link rel="stylesheet" href="/app/CSS/styles.css">
</head>
    <body>
        <div class="contents">
            <h1 class="make-choice"><?= Processor::$result ?></h1>
            <div class="field">

            </div>
            <form class="form" action="/choice" method="post">
                <button class="button" id="rock" type="submit" name="choice" value="0">
                    <img src="/app/Images/rock.png" alt="rock-image" width="100" height="97">
                </button>
                <button class="button" id="paper" type="submit" name="choice" value="1">
                    <img src="/app/Images/paper.png" alt="paper-image" width="100" height="97">
                </button>
                <button class="button" id="scissors" type="submit" name="choice" value="2">
                    <img src="/app/Images/scissors.png" alt="scissors-image" width="100" height="97">
                </button>
            </form>
        </div>
    </body>
</html>
