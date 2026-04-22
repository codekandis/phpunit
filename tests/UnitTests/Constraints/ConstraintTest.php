<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest\ConstraintsWithExpectedStringRepresentationDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest\ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest\ConstraintsWithValidValueAndExpectedResultDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\ExpectationFailedException;
use Throwable;

/**
 * Represents the test case of {@link Constraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ConstraintTest extends TestCase
{
	/**
	 * Tests if {@link Constraint::toString()} returns the string representation correctly.
	 * @param Constraint $constraint The constraint to test.
	 * @param string $expectedStringRepresentation The expected string representation.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintsWithExpectedStringRepresentationDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodToStringReturnsStringRepresentationCorrectly( Constraint $constraint, string $expectedStringRepresentation ): void
	{
		$resultedStringRepresentation = $constraint->toString();

		self::assertSame( $expectedStringRepresentation, $resultedStringRepresentation );
	}

	/**
	 * Tests if {@link Constraint::evaluate()} throws an {@link ExpectationFailedException} on a mismatching value.
	 * @param Constraint $constraint The constraint to test.
	 * @param mixed $mismatchingValue The value to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintsWithMismatchingValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodEvaluateThrowsExpectationFailedExceptionOnMismatchingValue( Constraint $constraint, mixed $mismatchingValue, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$constraint->evaluate( $mismatchingValue, '', false );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link Constraint::evaluate()} returns the result correctly.
	 * @param Constraint $constraint The constraint to test.
	 * @param mixed $value The value to pass.
	 * @param bool $expectedResult The expected result.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintsWithValidValueAndExpectedResultDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodEvaluateReturnsResultCorrectly( Constraint $constraint, mixed $value, bool $expectedResult ): void
	{
		$result = $constraint->evaluate( $value, '', true );

		static::assertSame( $expectedResult, $result );
	}
}
