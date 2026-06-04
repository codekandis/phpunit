# codekandis/phpunit

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/phpunit` is a library providing an enhanced test case wrapper with additional constraint assertions for
[`phpunit/phpunit`][xtlink-packagist-phpunit-phpunit].

## Index

* [Installation](#installation)
* [Usage](#usage)
  * [Using the test case wrapper](#using-the-test-case-wrapper)
  * [Using the data provider interface](#using-the-data-provider-interface)
  * [Asserting array subsets](#asserting-array-subsets)
    * [`TestCase::assertArrayContainsKeyedSubset()`](#testcaseassertarraycontainskeyedsubset)
    * [`TestCase::assertArrayContainsUnkeyedSubset()`](#testcaseassertarraycontainsunkeyedsubset)
    * [`TestCase::assertIsKeyedSubsetOfArray()`](#testcaseassertiskeyedsubsetofarray)
    * [`TestCase::assertIsUnkeyedSubsetOfArray()`](#testcaseassertisunkeyedsubsetofarray)
  * [Asserting subclass relationships](#asserting-subclass-relationships)
    * [`TestCase::assertIsSubClassOf()`](#testcaseassertissubclassof)

## Installation

Install the latest version with

```bash
$ composer require --dev codekandis/phpunit
```

## Usage

### Using the test case wrapper

Create a test case that extends the `TestCase` wrapper.

The additional constraint assertions are available through this wrapper.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

class ApplicationTest extends TestCase
{
}
```

### Using the data provider interface

Create a data provider that implements `DataProviderInterface`.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

final class DifferentValuesDataProvider implements DataProviderInterface
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
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\DataProviderInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

final class DifferentValuesTest extends TestCase
{
	#[DataProviderExternal( DifferentValuesDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testValuesAreDifferent( mixed $value1, mixed $value2 ): void
	{
		static::assertNotSame( $value1, $value2 );
	}
}
```

### Asserting array subsets

#### `TestCase::assertArrayContainsKeyedSubset()`

Use `TestCase::assertArrayContainsKeyedSubset()` to assert that `$actualArray` contains `$expectedSubset` with matching
keys and values. Set `$strict` to `true` to compare values strictly, or to `false` to compare values loosely.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

final class ArrayTest extends TestCase
{
	public function testArrayContainsKeyedSubset(): void
	{
		static::assertArrayContainsKeyedSubset(
			[
				'foo' => [
					'bar' => 23
				]
			],
			[
				'foo' => [
					'bar' => 23,
					'baz' => 42
				]
			],
			true
		);
	}
}
```

#### `TestCase::assertArrayContainsUnkeyedSubset()`

Use `TestCase::assertArrayContainsUnkeyedSubset()` to assert that `$actualArray` contains the values of
`$expectedSubset` without comparing keys. Set `$strict` to `true` to compare values strictly, or to `false` to compare
values loosely.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

final class ArrayTest extends TestCase
{
	public function testArrayContainsUnkeyedSubset(): void
	{
		static::assertArrayContainsUnkeyedSubset(
			[
				23,
			],
			[
				42,
				23
			],
			true
		);
	}
}
```

#### `TestCase::assertIsKeyedSubsetOfArray()`

Use `TestCase::assertIsKeyedSubsetOfArray()` to assert that `$actualSubset` is contained in `$expectedArray` with
matching keys and values. Set `$strict` to `true` to compare values strictly, or to `false` to compare values loosely.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

final class ArrayTest extends TestCase
{
	public function testKeyedSubsetIsSubsetOfArray(): void
	{
		static::assertIsKeyedSubsetOfArray(
			[
				'foo' => [
					'bar' => 23,
					'baz' => 42
				]
			],
			[
				'foo' => [
					'bar' => 23
				]
			],
			true
		);
	}
}
```

#### `TestCase::assertIsUnkeyedSubsetOfArray()`

Use `TestCase::assertIsUnkeyedSubsetOfArray()` to assert that the values of `$actualSubset` are contained in
`$expectedArray` without comparing keys. Set `$strict` to `true` to compare values strictly, or to `false` to compare
values loosely.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

final class ArrayTest extends TestCase
{
	public function testUnkeyedSubsetIsSubsetOfArray(): void
	{
		static::assertIsUnkeyedSubsetOfArray(
			[
				42,
				23
			],
			[
				23
			],
			true
		);
	}
}
```

### Asserting subclass relationships

#### `TestCase::assertIsSubClassOf()`

Use `TestCase::assertIsSubClassOf()` to assert that `$actual` is a subclass of or implements
`$expectedInterfaceOrClassName`. `$actual` can be an object or a class name.

```php
<?php declare( strict_types = 1 );
namespace Vendor\Project\Tests;

use CodeKandis\PhpUnit\TestCase;

interface MessageHandlerInterface
{
}

final class MessageHandler implements MessageHandlerInterface
{
}

final class MessageHandlerTest extends TestCase
{
	public function testMessageHandlerImplementsMessageHandlerInterface(): void
	{
		static::assertIsSubClassOf(
			MessageHandlerInterface::class,
			MessageHandler::class
		);
	}
}
```

The assertion throws an `UnknownClassOrInterfaceException` if the expected type does not exist.



[xtlink-version-badge]: https://img.shields.io/badge/version-4.0.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.5-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net
[xtlink-packagist-phpunit-phpunit]: https://packagist.org/packages/phpunit/phpunit

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
