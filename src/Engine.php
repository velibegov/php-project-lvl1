<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\getAnswer;
use function Php\Project\Lvl1\writeMsg;

function greet(): string
{
    writeMsg('Welcome to the Brain Games!');
    $name = getAnswer('May I have your name?');
    writeMsg("Hello, $name!");
    return $name;
}

function encourage(): void
{
    writeMsg('Correct!');
}

function warn(string $wrong, string $correct, string $name): void
{
    $message = $wrong . ' is wrong answer ;(. Correct answer was ' . $correct . '.';
    $partingMsg = "Let's try again, " . $name . '!';
    writeMsg($message);
    writeMsg($partingMsg);
}

function win(string $name): void
{
    writeMsg("Congratulations, $name!");
}

function play(string $game)
{
    $answers = [];
    $rounds = 3;
    $name = greet();

    while ($rounds > 0) {
        switch ($game) {
            case 'calculator':
                $answers = playCalc();
                break;
            case 'gcd':
                $answers = playGCD();
                break;
            case 'parity':
                $answers = playParity();
                break;
            case 'prime':
                $answers = playPrime();
                break;
            case 'progression':
                $answers = playProgression();
                break;
        }
        if ($answers['correct'] === $answers['answer']) {
            encourage();
            $rounds--;
            if ($rounds === 0) {
                win($name);
            }
        } elseif ($answers['correct'] !== $answers['answer']) {
            warn($answers['answer'], $answers['correct'], $name);
            $rounds = 0;
        }
    }
}
