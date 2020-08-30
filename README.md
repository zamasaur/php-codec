# php-codec

A package to encode and decode strings.

## Requirements

php >=7.4.8

## Installation

Let the folder structure of your project look like the one described below.

```
root/
	bin/
	config/
	docs/
	public/
		index.php
	resources/
	src/
	tests/
```

To install this package via Composer you must add it to your `composer.json` file in the root of your project. 

```json
/* composer.json */
{
    "name": "myname/myproject",
	"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/zamasaur/php-codec.git"
        }
    ],
    "require": {
        "zamasaur/php-codec": "dev-master"
    }
}
```

You can now install the dependencies by running Composer's install command.
```
$ composer install
```

To use it you must include this line inside your `index.php`:

```php
require_once __DIR__ . "/../vendor/autoload.php";
```

## Usage

You can use classes that implement `CoDec` interface to encode and decode strings.
Some implementation are already provided with this package:

* `UrlCoDec`

* `Base64CoDec`

Example:

```php
/* index.php */
require_once __DIR__ . "/../vendor/autoload.php";
use Zamasaur\PhpCoDec\UrlCoDec;
use Zamasaur\PhpCoDec\Base64CoDec;

$urlCoDec = new UrlCoDec();
$urlEncodedString = $urlCoDec->encode("Hello World!");
$urlDecodedString = $urlCoDec->decode("Hello%20World%21");

$base64CoDec = new Base64CoDec();
$base64EncodedString = $base64CoDec->encode("Hello World!");
$base64DecodedString = $base64CoDec->decode("SGVsbG8gV29ybGQh");
```

## UnitTest

This package comes with a series of UnitTest, to run them you must use the following command in a terminal opened in the root folder.

```
$ ./vendor/bin/phpunit tests
```

## PHPDoc

This package comply with the PHPDoc standard, to generate them you must use the following command in a terminal opened in the root folder.

```
$ ./vendor/bin/phpdoc -d ./src -t ./docs/api
```
