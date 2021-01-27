<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function isPrime(int $number): bool
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function playPrime(): void
{
    $rounds = 3;
    $name = greet();
    writeMsg('Answer "yes" if given number is prime. Otherwise answer "no".');

    while ($rounds > 0) {
        $number = rand(3, 1000);
        $correct_answer = (isPrime($number)) ? 'yes' : 'no';
        $answer = getAnswer("Question: $number");
        $rounds += play($correct_answer, $answer, $name);
    }
    win($name);
}
