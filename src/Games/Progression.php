<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function playProgression(): void
{
    $rounds = 3;
    $name = greet();
    writeMsg('What number is missing in the progression?');

    while ($rounds > 0) {
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
        $correct_answer = $arr_of_numbers[$correct_key];

        foreach ($arr_of_numbers as $number) {
            if ($number != $correct_answer) {
                $string_to_show .= $number . ' ';
            } else {
                $string_to_show .= '..' . ' ';
            }
        }
        $string_to_show = trim($string_to_show);

        $answer = getAnswer("Question: $string_to_show");

        $rounds += play((string)$correct_answer, $answer, $name);
    }
    win($name);
}
