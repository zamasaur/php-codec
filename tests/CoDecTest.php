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
            "Hello%20World%21%20%E5%8F%AF%E6%84%9B%E7%9A%84%E5%B0%8F%E8%B2%93",
            $urlCoDec->encode("Hello World! 可愛的小貓")
        );

        $this->assertEquals(
            "Hello World! 可愛的小貓",
            $urlCoDec->decode("Hello%20World%21%20%E5%8F%AF%E6%84%9B%E7%9A%84%E5%B0%8F%E8%B2%93")
        );

        $this->assertEquals(
            $urlCoDec->decode($urlCoDec->encode("Hello World! 可愛的小貓")),
            $urlCoDec->decode("Hello%20World%21%20%E5%8F%AF%E6%84%9B%E7%9A%84%E5%B0%8F%E8%B2%93")
        );

        $this->assertEquals(
            $urlCoDec->encode($urlCoDec->decode("Hello%20World%21%20%E5%8F%AF%E6%84%9B%E7%9A%84%E5%B0%8F%E8%B2%93")),
            $urlCoDec->encode("Hello World! 可愛的小貓")
        );
    }

    public function testBase64CoDec(): void
    {
        $base64CoDec = new Base64CoDec();
        
        $this->assertEquals(
            "SGVsbG8gV29ybGQhIOWPr-aEm-eahOWwj-iykw",
            $base64CoDec->encode("Hello World! 可愛的小貓")
        );

        $this->assertEquals(
            "Hello World! 可愛的小貓",
            $base64CoDec->decode("SGVsbG8gV29ybGQhIOWPr-aEm-eahOWwj-iykw")
        );

        $this->assertEquals(
            $base64CoDec->decode($base64CoDec->encode("Hello World! 可愛的小貓")),
            $base64CoDec->decode("SGVsbG8gV29ybGQhIOWPr-aEm-eahOWwj-iykw")
        );

        $this->assertEquals(
            $base64CoDec->encode($base64CoDec->decode("SGVsbG8gV29ybGQhIOWPr-aEm-eahOWwj-iykw")),
            $base64CoDec->encode("Hello World! 可愛的小貓")
        );
    }
}
