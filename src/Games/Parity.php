<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playParity()
{
    $rounds = 3;
    $name = greet();
    writeMsg('Answer "yes" if the number is even, otherwise answer "no".');

    while ($rounds > 0) {
        $number = rand(1, 100);
        $correct_answer = ($number % 2 == 0) ? 'yes' : 'no';
        $answer = getAnswer("Question: $number");
        $rounds += play($correct_answer, $answer, $name);
    }
    win($name);
}
