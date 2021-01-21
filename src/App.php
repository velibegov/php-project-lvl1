<?php

namespace Php\Project\Lvl1;

use Php\Project\Lvl1\Games\Playable;

function run()
{
    $user = greet();
    $game = chooseGame($user);
    if ($game instanceof Playable) {
        $game->taskPrint();
        $game->play();
    } else {
        exit();
    }
}

function runSpecific(Playable $game)
{
    $game->taskPrint();
    $game->play();
}
