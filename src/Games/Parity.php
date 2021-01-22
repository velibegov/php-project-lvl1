<?php

namespace Php\Project\Lvl1\Games;

use Php\Project\Lvl1\Cli;

class Parity extends Game implements Playable
{
    public function taskPrint()
    {
        Cli::writeMsg('Answer "yes" if the number is even, otherwise answer "no".');
    }

    public function play()
    {
        while ($this->rounds > 0) {
            $number = rand(1, 100);
            $this->correct_answer = ($number % 2 == 0) ? 'yes' : 'no';
            $this->answer = Cli::getAnswer("Question: $number");
            parent::play();
        }
        $this->win();
    }
}
