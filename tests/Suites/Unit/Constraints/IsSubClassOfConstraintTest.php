<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest\ConstraintClassFqcnsWithInterfaceOrClassFqcnDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest\ConstraintClassFqcnsWithUnkownInterfaceOrClassFqcnExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use Throwable;

/**
 * Represents the test case of {@link IsSubClassOfConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class IsSubClassOfConstraintTest extends TestCase
{
	/**
	 * Tests if {@link IsSubClassOfConstraint::__construct()} throws an {@link UnknownClassOrInterfaceException} on invalid interface or class FQCN.
	 * @param class-string<IsSubClassOfConstraint> $constraintClassFqcn The FQCN of the constraint to test.
	 * @param string $unknownInterfaceOrClassFqcn The unknown interface or class FQCN to pass.
	 * @param class-string<UnknownClassOrInterfaceException> $expectedThrowableClassFqcn The expected throwable FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintClassFqcnsWithUnkownInterfaceOrClassFqcnExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorThrowsUnknownClassOrInterfaceExceptionOnUnknownInterfaceOrClassFqcn( string $constraintClassFqcn, string $unknownInterfaceOrClassFqcn, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			new $constraintClassFqcn( $unknownInterfaceOrClassFqcn );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( UnknownClassOrInterfaceException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link IsSubClassOfConstraint::__construct()} instantiates the constraint correctly.
	 * @param class-string<IsSubClassOfConstraint> $constraintClassFqcn The FQCN of the constraint to test.
	 * @param class-string $interfaceOrClassFqcn The interface or class FQCN to pass.
	 */
	#[DataProviderExternal( ConstraintClassFqcnsWithInterfaceOrClassFqcnDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassFqcn, string $interfaceOrClassFqcn ): void
	{
		$resultedConstraint = new $constraintClassFqcn( $interfaceOrClassFqcn );

		static::assertInstanceOf( IsSubClassOfConstraint::class, $resultedConstraint );
	}
}
