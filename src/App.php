<?php

use function Php\Project\Lvl1\chooseGame;
use function Php\Project\Lvl1\greet;

function runSpecific($game)
{
    $game->taskPrint();
    $game->play();
}

function run()
{
    greet();
    /*
    $game = chooseGame($user);
    $game->taskPrint();
    $game->play();
    */
}
