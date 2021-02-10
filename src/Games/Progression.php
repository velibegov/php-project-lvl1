<?php

namespace Php\Project\Lvl1\Games;

function playProgression(): void
{
    $question = 'What number is missing in the progression?';
    $name = greet();
    $rounds = 0;

    while ($rounds < 4) {
        $progressionLength = rand(5, 10);
        $progressionStep = rand(2, 9);
        $startValue = rand(1, 100);
        $numbers = [];
        $stringToShow = '';
        for ($i = 0; $i < $progressionLength; $i++) {
            array_push($numbers, $startValue);
            $startValue += $progressionStep;
        }
        $correctKey = array_rand($numbers, 1);
        $correctAnswer = $numbers[$correctKey];
        foreach ($numbers as $number) {
            if ($number != $correctAnswer) {
                $stringToShow .= $number . ' ';
            } else {
                $stringToShow .= '..' . ' ';
            }
        }
        $subject = trim($stringToShow);
        $rounds += play($question, $name, $correctAnswer, $subject, $rounds);
    }
}
