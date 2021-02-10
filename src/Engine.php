<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function greet(): string
{
    writeMsg('Welcome to the Brain Games!');
    $name = getAnswer('May I have your name?');
    writeMsg("Hello, $name!");
    return $name;
}

function play(string $question, string $name, $correctAnswer, $subject, int $roundsPassed): int
{
    writeMsg($question);
    $answer = getAnswer("Question: $subject");
    if ($correctAnswer == $answer) {
        writeMsg('Correct!');
        $roundsPassed++;
        if ($roundsPassed > 3) {
            writeMsg("Congratulations, $name!");
        }
        return $roundsPassed;
    } else {
        $message = $answer . ' is wrong answer ;(. Correct answer was ' . $correctAnswer . '.';
        $partingMsg = "Let's try again, " . $name . '!';
        writeMsg($message);
        writeMsg($partingMsg);
        return 4;
    }
}
