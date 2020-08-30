<?php

namespace Zamasaur\PhpCoDec;

use Zamasaur\PhpCoDec\CoDec;

/**
 * Represents a base64 CoDec to encode and decode strings.
 * As specified here: {@link http://jb64.org}.
 */
class Base64CoDec implements CoDec
{
    public function encode(string $string): string
    {
        $string = base64_encode($string);
        $string = str_replace("+", "-", $string);
        $string = str_replace("/", "_", $string);
        $string = str_replace("=", "", $string);
        return $string;
    }

    public function decode(string $string): string
    {
        $string = str_replace(" ", "", $string);
        $string = str_replace("_", "/", $string);
        $string = str_replace("-", "+", $string);
        $string = base64_decode($string);
        return $string;
    }
}
