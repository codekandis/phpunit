<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\IsSubClassOfConstraintTest\ConstraintClassNamesWithInterfaceOrClassNameDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\IsSubClassOfConstraintTest\ConstraintClassNamesWithUnkownInterfaceOrClassNameExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
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
	 * @param string $constraintClassName The class name of the constraint to test.
	 * @param string $unknownInterfaceOrClassName The unknown interface or class name to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 * @return void
	 */
	#[DataProviderExternal( ConstraintClassNamesWithUnkownInterfaceOrClassNameExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorThrowsUnknownClassOrInterfaceExceptionOnUnknownInterfaceOrClassName( string $constraintClassName, string $unknownInterfaceOrClassName, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			new $constraintClassName( $unknownInterfaceOrClassName );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( UnknownClassOrInterfaceException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link IsSubClassOfConstraint::__construct()} instantiates the constraint correctly.
	 * @param string $constraintClassName The class name of the constraint to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 */
	#[DataProviderExternal( ConstraintClassNamesWithInterfaceOrClassNameDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassName, string $interfaceOrClassName ): void
	{
		$resultedConstraint = new $constraintClassName( $interfaceOrClassName );

		static::assertInstanceOf( IsSubClassOfConstraint::class, $resultedConstraint );
	}
}
