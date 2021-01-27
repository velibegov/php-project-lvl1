<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

function writeMsg(string $message): string
{
    line($message);
    return $message;
}

function getAnswer(string $message): string
{
    return prompt($message);
}
