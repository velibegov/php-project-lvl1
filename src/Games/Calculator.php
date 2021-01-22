<?php

namespace Php\Project\Lvl1\Games;

use Php\Project\Lvl1\Cli;

class Calculator extends Game implements Playable
{
    public function taskPrint()
    {
        Cli::writeMsg('What is the result of the expression?');
    }

    public function play()
    {
        while ($this->rounds > 0) {
            $first_number = rand(1, 10);
            $second_number = rand(1, 10);
            $math_operations = ['+', '-', '*'];
            $operation_key = array_rand($math_operations, 1);
            $expression = $first_number . $math_operations[$operation_key] . $second_number;
            $this->correct_answer = eval('return ' . $expression . ';');
            $this->answer = Cli::getAnswer("Question: $first_number $math_operations[$operation_key] $second_number");
            parent::play();
        }
        $this->win();
    }
}
