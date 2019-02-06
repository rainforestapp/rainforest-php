# Rainforest PHP Bindings

:warning: :no_entry_sign: This code is unmaintained and deprecated. It may not work and may have security issues :no_entry_sign: :warning:


## Documentation

Full documentation is available at [https://docs.rainforestqa.com](https://docs.rainforestqa.com).

## Requirements

PHP 5.3.3 and later.

## Composer
You can install the bindings via [Composer](http://getcomposer.org/). Add this to your composer.json:

```php
{
  "require": {
    "rainforestapp/rainforest-php": "1.*"
  }
}
```

Then install via:

```php
composer install
```

## Manual Installation
If you do not wish to use Composer, you can download the [latest release](https://github.com/rainforestapp/rainforest-php/releases) . Then, to use the bindings, include the init.php file.

```php
require_once('/path/to/rainforest-php/init.php');
```

## Tests
In order to run tests first install [PHPUnit](http://packagist.org/packages/phpunit/phpunit) via [Composer](http://getcomposer.org/):

```php
composer update --dev
```
To run the test suite:
```php
./vendor/bin/phpunit
```

We welcome suggestions and feedback from our users :D
