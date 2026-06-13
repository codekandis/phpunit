<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest\ConstraintClassNamesWithInterfaceOrClassNameDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsSubClassOfConstraintTest\ConstraintClassNamesWithUnkownInterfaceOrClassNameExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
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
	 * Tests if {@link IsSubClassOfConstraint::__construct()} throws an {@link UnknownClassOrInterfaceException} on invalid interface or class name.
	 * @param class-string<IsSubClassOfConstraint> $constraintClassName The class name of the constraint to test.
	 * @param string $unknownInterfaceOrClassName The unknown interface or class name to pass.
	 * @param class-string<UnknownClassOrInterfaceException> $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintClassNamesWithUnkownInterfaceOrClassNameExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorThrowsUnknownClassOrInterfaceExceptionOnUnknownInterfaceOrClassName( string $constraintClassName, string $unknownInterfaceOrClassName, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			new $constraintClassName( $unknownInterfaceOrClassName );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( UnknownClassOrInterfaceException::class, $throwable );

			$resultedThrowableClassName = $throwable::class;
			static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );

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
	 * @param class-string<IsSubClassOfConstraint> $constraintClassName The class name of the constraint to test.
	 * @param class-string $interfaceOrClassName The interface or class name to pass.
	 */
	#[DataProviderExternal( ConstraintClassNamesWithInterfaceOrClassNameDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassName, string $interfaceOrClassName ): void
	{
		$resultedConstraint = new $constraintClassName( $interfaceOrClassName );

		static::assertInstanceOf( IsSubClassOfConstraint::class, $resultedConstraint );
	}
}
