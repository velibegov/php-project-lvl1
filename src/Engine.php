<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function play(string $question, callable $callback): void
{
    writeMsg('Welcome to the Brain Games!');
    $name = getAnswer('May I have your name?');
    writeMsg("Hello, $name!");

    if (!empty($question) && !empty($callback)) {
        $roundsPassed = 0;
    } else {
        $roundsPassed = 4;
    }

    while ($roundsPassed < 4) {
        $params = call_user_func($callback);
        $subject = (string)$params['subject'];
        $correctAnswer = (string)$params['correct'];
        writeMsg($question);

        $answer = getAnswer("Question: $subject");
        if ($correctAnswer === $answer) {
            writeMsg('Correct!');
            ++$roundsPassed;
            if ($roundsPassed === 3) {
                writeMsg("Congratulations, $name!");
                $roundsPassed = 4;
            }
        } else {
            $message = $answer . ' is wrong answer ;(. Correct answer was ' . $correctAnswer . '.';
            $partingMsg = "Let's try again, " . $name . '!';
            writeMsg($message);
            writeMsg($partingMsg);
            $roundsPassed = 4;
        }
    }
}
