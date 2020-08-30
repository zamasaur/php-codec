<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Zamasaur\PhpCoDec\UrlCoDec;
use Zamasaur\PhpCoDec\Base64CoDec;

final class CoDecTest extends TestCase
{
    public function testUrlCoDec(): void
    {
        $urlCoDec = new UrlCoDec();
        
        $this->assertEquals(
            "Hello%20World%21",
            $urlCoDec->encode("Hello World!")
        );

        $this->assertEquals(
            "Hello World!",
            $urlCoDec->decode("Hello%20World%21")
        );

        $this->assertEquals(
            $urlCoDec->decode($urlCoDec->encode("Hello World!")),
            $urlCoDec->decode("Hello%20World%21")
        );

        $this->assertEquals(
            $urlCoDec->encode($urlCoDec->decode("Hello%20World%21")),
            $urlCoDec->encode("Hello World!")
        );
    }

    public function testBase64CoDec(): void
    {
        $base64CoDec = new Base64CoDec();
        
        $this->assertEquals(
            "SGVsbG8gV29ybGQh",
            $base64CoDec->encode("Hello World!")
        );

        $this->assertEquals(
            "Hello World!",
            $base64CoDec->decode("SGVsbG8gV29ybGQh")
        );

        $this->assertEquals(
            $base64CoDec->decode($base64CoDec->encode("Hello World!")),
            $base64CoDec->decode("SGVsbG8gV29ybGQh")
        );

        $this->assertEquals(
            $base64CoDec->encode($base64CoDec->decode("SGVsbG8gV29ybGQh")),
            $base64CoDec->encode("Hello World!")
        );
    }
}
