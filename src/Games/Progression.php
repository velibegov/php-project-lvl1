<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playProgression(): array
{
    writeMsg('What number is missing in the progression?');

    $progressionLength = rand(5, 10);
    $progressionStep = rand(2, 9);
    $startValue = rand(1, 100);
    $arrOfNumbers = [];
    $stringToShow = '';

    for ($i = 0; $i < $progressionLength; $i++) {
        array_push($arrOfNumbers, $startValue);
        $startValue += $progressionStep;
    }

    $correctKey = array_rand($arrOfNumbers, 1);
    $correctAnswer = $arrOfNumbers[$correctKey];

    foreach ($arrOfNumbers as $number) {
        if ($number != $correctAnswer) {
            $stringToShow .= $number . ' ';
        } else {
            $stringToShow .= '..' . ' ';
        }
    }
    $stringToShow = trim($stringToShow);
    $answer = getAnswer("Question: $stringToShow");
    return ['correct' => $correctAnswer, 'answer' => (int)$answer];
}
