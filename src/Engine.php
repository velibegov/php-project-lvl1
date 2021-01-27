<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function greet(): string
{
    writeMsg('Welcome to the Brain Games!');
    $name = getAnswer('May I have your name?');
    writeMsg("Hello, $name!");
    return $name;
}

function encourage()
{
    writeMsg('Correct!');
}

function warn(string $wrong, string $correct, string $name)
{
    $message = $wrong . ' is wrong answer ;(. Correct answer was ' . $correct . '.';
    $parting_msg = "Let's try again, " . $name . '!';
    writeMsg($message);
    writeMsg($parting_msg);
}

function win(string $name)
{
    writeMsg("Congratulations, $name!");
    exit(0);
}

function play(string $correct_answer, string $answer, string $name): int
{
    if ($answer != $correct_answer) {
        warn($answer, $correct_answer, $name);
        exit(0);
    } else {
        encourage();
        return -1;
    }
}
