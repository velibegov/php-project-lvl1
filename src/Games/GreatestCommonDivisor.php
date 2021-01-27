<?php

use function Php\Project\Lvl1\Games\greet;
use function Php\Project\Lvl1\Games\play;
use function Php\Project\Lvl1\Games\win;
use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function gcd(int $a, int $b): int
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function playGCD(): void
{
    $rounds = 3;
    $name = greet();
    writeMsg('Find the greatest common divisor of given numbers.');

    while ($rounds > 0) {
        $first_number = rand(1, 100);
        $second_number = rand(1, 100);

        $correct_answer = gcd($first_number, $second_number);

        $answer = getAnswer("Question: $first_number $second_number");
        $rounds += play((string)$correct_answer, $answer, $name);
    }
    win($name);
}
