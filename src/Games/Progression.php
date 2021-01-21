<?php


namespace Php\Project\Lvl1\Games;


use Php\Project\Lvl1\Cli;

class Progression extends Game implements Playable
{

    public function taskPrint()
    {
        Cli::writeMsg('What number is missing in the progression?');
    }

    public function play()
    {
        while ($this->rounds > 0) {
            $progression_length = rand(5, 10);
            $progression_step = rand(2, 9);
            $start_value = rand(1, 100);
            $arr_of_numbers = [];
            $string_to_show = '';

            for ($i = 0; $i < $progression_length; $i++) {
                array_push($arr_of_numbers, $start_value);
                $start_value += $progression_step;
            }

            $correct_key = array_rand($arr_of_numbers, 1);
            $this->correct_answer = $arr_of_numbers[$correct_key];

            foreach ($arr_of_numbers as $number) {
                if ($number != $this->correct_answer) {
                    $string_to_show .= $number . ' ';
                } else {
                    $string_to_show .= '..' . ' ';
                }
            }
            trim($string_to_show);

            $this->answer = Cli::getAnswer("Question: $string_to_show");

            parent::play();
        }
        $this->win();
    }
}