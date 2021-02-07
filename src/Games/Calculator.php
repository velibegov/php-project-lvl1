<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playCalc(): array
{
    writeMsg('What is the result of the expression?');
    $firstNumber = rand(1, 10);
    $secondNumber = rand(1, 10);
    $mathOperations = ['+', '-', '*'];
    $operationKey = array_rand($mathOperations, 1);
    $correctAnswer = '';
    switch ($mathOperations[$operationKey]) {
        case '+':
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case '-':
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case '*':
            $correctAnswer = $firstNumber * $secondNumber;
            break;
    }
    $answer = getAnswer("Question: $firstNumber $mathOperations[$operationKey] $secondNumber");
    return ['correct' => $correctAnswer, 'answer' => (int)$answer];
}
