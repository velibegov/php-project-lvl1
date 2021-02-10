<?php

namespace Php\Project\Lvl1\Games;

function playOddEvenGame(): void
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = greet();
    $rounds = 0;

    while ($rounds < 4) {
        $subject = rand(1, 100);
        $correctAnswer = ($subject % 2 === 0) ? 'yes' : 'no';
        $rounds += play($question, $name, $correctAnswer, $subject, $rounds);
    }
}
