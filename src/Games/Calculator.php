<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\writeMsg;

function playCalculator(): void
{
    $question = 'What is the result of the expression?';
    $name = greet();
    $rounds = 0;

    while ($rounds < 4) {
        $firstNumber = rand(1, 10);
        $secondNumber = rand(1, 10);
        $mathOperations = ['+', '-', '*'];
        $operationKey = array_rand($mathOperations, 1);
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
            default:
                throw new \Error(writeMsg("Unknown math operation: {$mathOperations[$operationKey]}!"));
        }
        $subject = "$firstNumber $mathOperations[$operationKey] $secondNumber";
        $rounds += play($question, $name, $correctAnswer, $subject, $rounds);
    }
}
