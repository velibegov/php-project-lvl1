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
    $maxFactor = (int)sqrt($number);
    while ($i <= $maxFactor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function playPrime(): array
{
    writeMsg('Answer "yes" if given number is prime. Otherwise answer "no".');
    $number = rand(3, 1000);
    $correctAnswer = (isPrime($number)) ? 'yes' : 'no';
    $answer = getAnswer("Question: $number");
    return ['correct' => $correctAnswer, 'answer' => $answer];
}
