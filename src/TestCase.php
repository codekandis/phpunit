<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase as TestCaseOrigin;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use function class_exists;
use function interface_exists;

/**
 * Represents the base class of all test cases.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TestCase extends TestCaseOrigin
{
	use ArraySubsetAsserts;

	/**
	 * Asserts that a variable is a subsclass of a given type.
	 * @throws ExpectationFailedException The assertion has been failed.
	 * @throws UnknownClassOrInterfaceException The type is neither an interface nor a class.
	 */
	final public static function assertSubClassOf( string $expectedInterfaceOrClassName, mixed $actual, string $message = '' ): void
	{
		if (
			false === class_exists( $expectedInterfaceOrClassName )
			&& false === interface_exists( $expectedInterfaceOrClassName )
		)
		{
			throw new UnknownClassOrInterfaceException( $expectedInterfaceOrClassName );
		}

		static::assertThat(
			$actual,
			new IsSubClassOf( $expectedInterfaceOrClassName ),
			$message,
		);
	}
}
