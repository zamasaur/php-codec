<?php

namespace Zamasaur\PhpCoDec;

/**
 * Represents a CoDec to encode and decode strings.
 */
interface CoDec
{
    /**
     * Returns an encoded string.
     *
     * @param string $string
     *
     * @return string
     */
    public function encode(string $string): string;

    /**
     * Returns a decoded string.
     *
     * @param string $string
     *
     * @return string
     */
    public function decode(string $string): string;
}
