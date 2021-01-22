<?php

use Php\Project\Lvl1\Games\Calculator;
use Php\Project\Lvl1\Games\GreatestCommonDivisor;
use Php\Project\Lvl1\Games\Parity;
use Php\Project\Lvl1\Games\Prime;
use Php\Project\Lvl1\Games\Progression;
use function Php\Project\Lvl1\greet;

function runParity()
{
    $user = greet();
    $game = new Parity($user);
    $game->taskPrint();
    $game->play();
}

function runCalc()
{
    $user = greet();
    $game = new Calculator($user);
    $game->taskPrint();
    $game->play();
}

function runGcd()
{
    $user = greet();
    $game = new GreatestCommonDivisor($user);
    $game->taskPrint();
    $game->play();
}

function runPrime()
{
    $user = greet();
    $game = new Prime($user);
    $game->taskPrint();
    $game->play();
}

function runProgression()
{
    $user = greet();
    $game = new Progression($user);
    $game->taskPrint();
    $game->play();
}