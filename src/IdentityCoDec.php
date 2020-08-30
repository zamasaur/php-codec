<?php

namespace Zamasaur\PhpCoDec;

use Zamasaur\PhpCoDec\CoDec;

/**
 * Represents CoDec that doens't alter the string.
 */
class IdentityCoDec implements CoDec
{
    public function encode(string $string): string
    {
        return $string;
    }

    public function decode(string $string): string
    {
        return $string;
    }
}
