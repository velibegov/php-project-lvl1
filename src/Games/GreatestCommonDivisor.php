<?php

namespace Php\Project\Lvl1\Games;

use Php\Project\Lvl1\Cli;

class GreatestCommonDivisor extends Game implements Playable
{

    public function taskPrint()
    {
        Cli::writeMsg('Find the greatest common divisor of given numbers.');
    }

    public function gcd($a, $b)
    {
        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        return $a;
    }

    public function play()
    {
        while ($this->rounds > 0) {
            $first_number = rand(1, 100);
            $second_number = rand(1, 100);

            $this->correct_answer = $this->gcd($first_number, $second_number);

            $this->answer = Cli::getAnswer("Question: $first_number $second_number");
            parent::play();
        }
        $this->win();
    }
}
