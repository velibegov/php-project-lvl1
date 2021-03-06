<?php

namespace Php\Project\Lvl1\Games;

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

function playPrime(): void
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    play($question, function (): array {
        $subject = rand(3, 100);
        $correctAnswer = (isPrime($subject)) ? 'yes' : 'no';
        return ['correct' => $correctAnswer, 'subject' => $subject];
    });
}
