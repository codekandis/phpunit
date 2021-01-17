# codekandis/phpunit

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]

This library provides several wrappers and helper classes for the package [`phpunit/phpunit`][xtlink-packagist-phpunit-phpunit].

## Index

* [Installation](#installation)
* [How to use](#how-to-use)
  * [Using the test case wrapper](#using-the-test-case-wrapper)

## Installation

Install the latest version with

```bash
$ composer require --dev codekandis/phpunit
```

# How to use

## Using the test case wrapper

Create a new test case and inherit it from the wrapper `TestCase`.

```php
<?php declare( strict_types = 1 );
use CodeKandis\PhpUnit\TestCase;

class FooTest extends TestCase
{
}
```



[xtlink-version-badge]: https://img.shields.io/badge/version-3.0.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg
[xtlink-php-net]: https://php.net
[xtlink-packagist-phpunit-phpunit]: https://packagist.org/packages/phpunit/phpunit

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
