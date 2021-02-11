<?php

namespace Php\Project\Lvl1\Games;

function playOddEvenGame(): void
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';

    play($question, function (): array {
        $subject = rand(1, 100);
        $correctAnswer = ($subject % 2 === 0) ? 'yes' : 'no';
        return ['correct' => $correctAnswer, 'subject' => $subject];
    });
}
