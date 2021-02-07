<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playParity(): array
{
    writeMsg('Answer "yes" if the number is even, otherwise answer "no".');
    $number = rand(1, 100);
    $correctAnswer = ($number % 2 == 0) ? 'yes' : 'no';
    $answer = getAnswer("Question: $number");
    return ['correct' => $correctAnswer, 'answer' => $answer];
}
