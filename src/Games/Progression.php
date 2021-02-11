<?php

namespace Php\Project\Lvl1\Games;

function playProgression(): void
{
    $question = 'What number is missing in the progression?';

    play($question, function (): array {
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
        return ['correct' => $correctAnswer, 'subject' => $subject];
    });
}
