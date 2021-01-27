<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playCalc(): void
{
    $rounds = 3;
    $name = greet();
    writeMsg('What is the result of the expression?');

    while ($rounds > 0) {
        $first_number = rand(1, 10);
        $second_number = rand(1, 10);
        $math_operations = ['+', '-', '*'];
        $operation_key = array_rand($math_operations, 1);
        $expression = $first_number . $math_operations[$operation_key] . $second_number;
        $correct_answer = eval('return ' . $expression . ';');
        $answer = getAnswer("Question: $first_number $math_operations[$operation_key] $second_number");
        $rounds += play($correct_answer, $answer, $name);
    }
    win($name);
}
