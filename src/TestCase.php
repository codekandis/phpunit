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
use Throwable;
use function sprintf;

/**
 * Represents the base class of all test cases.
 * Provides test cases with the package-specific assertion API.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TestCase extends TestCaseOrigin implements TestCaseInterface
{
	/**
	 * Represents the expected throwable has not been thrown message.
	 * @var string
	 */
	protected const string EXCEPTION_MESSAGE_WITH_UNEXPECTED_THROWABLE_FQCN_TEMPLATE = 'The unexpected throwable `%1$s` has been thrown.';

	/**
	 * Represents the expected throwable has not been thrown message.
	 * @var string
	 */
	protected const string EXCEPTION_MESSAGE_WITH_EXPECTED_THROWABLE_FQCN_TEMPLATE = 'The expected throwable `%1$s` has not been thrown.';

	/**
	 * Fails because an unexpected throwable has been thrown.
	 * @param class-string<Throwable> $unexpectedThrowableFqcn The unexpected throwable FQCN.
	 * @return never
	 * @throws AssertionFailedError The test failed.
	 */
	protected static function failUnexpectedThrowableHasBeenThrown( string $unexpectedThrowableFqcn ): never
	{
		static::fail(
			sprintf( static::EXCEPTION_MESSAGE_WITH_UNEXPECTED_THROWABLE_FQCN_TEMPLATE, $unexpectedThrowableFqcn )
		);
	}

	/**
	 * Fails because an expected throwable has not been thrown.
	 * @param class-string<Throwable> $expectedThrowableFqcn The expected throwable FQCN.
	 * @return never
	 * @throws AssertionFailedError The test failed.
	 */
	protected static function failExpectedThrowableHasNotBeenThrown( string $expectedThrowableFqcn ): never
	{
		static::fail(
			sprintf( static::EXCEPTION_MESSAGE_WITH_EXPECTED_THROWABLE_FQCN_TEMPLATE, $expectedThrowableFqcn )
		);
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
	public static function assertIsSubClassOf( string $expectedInterfaceOrClassFqcn, mixed $actual, string $message = '' ): void
	{
		static::assertThat(
			$actual,
			new IsSubClassOfConstraint( $expectedInterfaceOrClassFqcn ),
			$message,
		);
	}
}
