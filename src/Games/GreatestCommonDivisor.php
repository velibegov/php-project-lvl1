<?php

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

function playGCD(): array
{
    writeMsg('Find the greatest common divisor of given numbers.');
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $correctAnswer = gcd($firstNumber, $secondNumber);
    $answer = getAnswer("Question: $firstNumber $secondNumber");
    return ['correct' => $correctAnswer, 'answer' => (int)$answer];
}
