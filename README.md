# codekandis/phpunit

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]

This library provides several wrappers and helper classes for the package [`phpunit/phpunit`][xtlink-packagist-phpunit-phpunit].

## Index

* [Installation](#installation)
* [How to use](#how-to-use)
  * [Using the test case wrapper](#using-the-test-case-wrapper)
  * [Using the data provider interface](#using-the-data-provider-interface)

## Installation

Install the latest version with

```bash
$ composer require --dev codekandis/phpunit
```

# How to use

## Using the test case wrapper

Create a new test case and inherit it from the wrapper `TestCase`.

```php
class FooTest extends TestCase
{
}
```

## Using the data provider interface

Create a new data provider and implement the interface `DataProviderInterface`.

```php
class ImportantStuffDataProvider implements DataProviderInterface
{
  #[Override]
  public static function provideData(): iterable
  {
    return [
      0 => [
        23,
        42
      ],
      1 => [
        'foo',
        'bar'
      ]
    ];
  }
}
```

Use the data provider in your test case.

```php
<?php declare( strict_types = 1 );
use CodeKandis\PhpUnit\TestCase;

class FooTest extends TestCase
{
  #[DataProviderExternal( ImportantStuffDataProvider::class, 'provideData' )]
  testImportantStuff( string $value1, string $value2 )
  {
  }
}
```



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.4-8892BF.svg
[xtlink-php-net]: https://php.net
[xtlink-packagist-phpunit-phpunit]: https://packagist.org/packages/phpunit/phpunit

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
