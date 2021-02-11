<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\writeMsg;

function playCalculator(): void
{
    $question = 'What is the result of the expression?';

    play($question, function (): array {
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
        return ['correct' => $correctAnswer, 'subject' => $subject];
    });
}
