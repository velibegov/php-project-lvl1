<?php

use function Php\Project\Lvl1\Games\greet;
use function Php\Project\Lvl1\Games\play;

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
    $question = 'Find the greatest common divisor of given numbers.';
    play($question, function (): array {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $correctAnswer = gcd($firstNumber, $secondNumber);
        $subject = "$firstNumber $secondNumber";
        return ['correct' => $correctAnswer, 'subject' => $subject];
    });
}
