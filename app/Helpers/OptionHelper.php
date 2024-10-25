<?php

namespace App\Helpers;

class OptionHelper
{
    public static function getOptionLetter($index)
    {
        return chr(65 + $index); // 65 representa "A" em ASCII, 66 é "B", etc.
    }
}
