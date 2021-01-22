<?php


namespace Php\Project\Lvl1\Games;


use Php\Project\Lvl1\Cli;
use Php\Project\Lvl1\User;

abstract class Game implements Playable
{
    protected User $user;
    protected int $rounds = 3;
    protected $answer;
    protected $correct_answer;

    /**
     * Game constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function encourage()
    {
        Cli::writeMsg('Correct!');
    }

    public function warn($wrong, $correct)
    {
        $message = $wrong . ' is wrong answer ;(. Correct answer was ' . $correct . '.';
        Cli::writeMsg($message);
    }

    public function win()
    {
        $name = $this->user->getName();
        Cli::writeMsg("Congratulations, $name!");
    }

    public function play()
    {
        if ($this->answer != $this->correct_answer) {
            $this->warn($this->answer, $this->correct_answer);
            //$this->rounds = 3;
        } else {
            $this->encourage();
            $this->rounds--;
        }
    }
}