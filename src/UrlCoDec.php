<?php

namespace Zamasaur\PhpCoDec;

use Zamasaur\PhpCoDec\CoDec;

/**
 * Represents a URL CoDec to encode and decode strings.
 * As specified in RFC 3986.
 */
class UrlCoDec implements CoDec
{
    public function encode(string $string): string
    {
        return rawurlencode($string);
    }

    public function decode(string $string): string
    {
        return rawurldecode($string);
    }
}
