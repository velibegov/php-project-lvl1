<?php

namespace Php\Project\Lvl1\Games;

use Php\Project\Lvl1\Cli;

class Prime extends Game implements Playable
{

    public function taskPrint()
    {
        Cli::writeMsg('Answer "yes" if given number is prime. Otherwise answer "no".');
    }

    public function isPrime($number)
    {
        if ($number == 2) {
            return true;
        }
        if ($number % 2 == 0) {
            return false;
        }
        $i = 3;
        $max_factor = (int)sqrt($number);
        while ($i <= $max_factor) {
            if ($number % $i == 0) {
                return false;
            }
            $i += 2;
        }
        return true;
    }

    public function play()
    {
        while ($this->rounds > 0) {
            $number = rand(3, 1000);
            $this->correct_answer = ($this->isPrime($number)) ? 'yes' : 'no';
            $this->answer = Cli::getAnswer("Question: $number");
            parent::play();
        }
        $this->win();
    }
}
