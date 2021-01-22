<?php

namespace Php\Project\Lvl1;

use Php\Project\Lvl1\Games\Calculator;
use Php\Project\Lvl1\Games\GreatestCommonDivisor;
use Php\Project\Lvl1\Games\Parity;
use Php\Project\Lvl1\Games\Prime;
use Php\Project\Lvl1\Games\Progression;

function greet(): User
{
    Cli::writeMsg('Welcome to the Brain Games!');
    $name = Cli::getAnswer('May I have your name?');
    Cli::writeMsg("Hello, $name!");
    return new User($name);
}

function chooseGame(User $user)
{
    Cli::writeMsg('1 - Parity check');
    Cli::writeMsg('2 - Calculator');
    Cli::writeMsg('3 - Greatest Common Divisor');
    Cli::writeMsg('4 - Progression');
    Cli::writeMsg('5 - Is the number prime');

    $name_of_game = Cli::getAnswer('Please, print the number of the game');

    switch ($name_of_game) {
        case 1:
            return new Parity($user);
        case 2:
            return new Calculator($user);
        case 3:
            return new GreatestCommonDivisor($user);
        case 4:
            return new Progression($user);
        case 5:
            return new Prime($user);
    }
    return Cli::writeMsg("You entered an invalid number");
}
