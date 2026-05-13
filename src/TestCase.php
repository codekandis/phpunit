<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use Override;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\TestCase as TestCaseOrigin;

/**
 * Represents the base class of all test cases.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TestCase extends TestCaseOrigin implements TestCaseInterface
{
	/**
	 * Represents the expected throwable has not been thrown message.
	 * @var string
	 */
	protected const string EXPECTED_THROWABLE_HAS_NOT_BEEN_THROWN_MESSAGE = 'The expected throwable has not been thrown.';

	/**
	 * Fails because an expected throwable has not been thrown.
	 * @return never
	 * @throws AssertionFailedError The test failed.
	 */
	protected static function failExpectedThrowableHasNotBeenThrown(): never
	{
		static::fail( static::EXPECTED_THROWABLE_HAS_NOT_BEEN_THROWN_MESSAGE );
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function assertArrayContainsKeyedSubset( array $expectedSubset, array $actualArray, bool $strict, string $message = '' ): void
	{
		static::assertThat(
			$actualArray,
			new ArrayContainsKeyedSubsetConstraint( $expectedSubset, $strict ),
			$message
		);
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function assertArrayContainsUnkeyedSubset( array $expectedSubset, array $actualArray, bool $strict, string $message = '' ): void
	{
		static::assertThat(
			$actualArray,
			new ArrayContainsUnkeyedSubsetConstraint( $expectedSubset, $strict ),
			$message
		);
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function assertIsKeyedSubsetOfArray( array $expectedArray, array $actualSubset, bool $strict, string $message = '' ): void
	{
		static::assertThat(
			$actualSubset,
			new IsKeyedSubsetOfArrayConstraint( $expectedArray, $strict ),
			$message
		);
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function assertIsUnkeyedSubsetOfArray( array $expectedArray, array $actualSubset, bool $strict, string $message = '' ): void
	{
		static::assertThat(
			$actualSubset,
			new IsUnkeyedSubsetOfArrayConstraint( $expectedArray, $strict ),
			$message
		);
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function assertIsSubClassOf( string $expectedInterfaceOrClassName, mixed $actual, string $message = '' ): void
	{
		static::assertThat(
			$actual,
			new IsSubClassOfConstraint( $expectedInterfaceOrClassName ),
			$message,
		);
	}
}
