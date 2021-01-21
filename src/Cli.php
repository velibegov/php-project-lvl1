<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

class Cli
{

    public static function writeMsg($message)
    {
        line($message);
        return $message;
    }

    public static function getAnswer($message)
    {
        return prompt($message);
    }
}


