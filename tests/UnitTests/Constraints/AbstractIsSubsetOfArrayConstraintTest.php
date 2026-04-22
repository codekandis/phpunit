<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints;

use CodeKandis\PhpUnit\Constraints\AbstractIsSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\AbstractIsSubsetOfArrayConstraintTest\ConstraintClassNamesWithArrayAndStrictFlagDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractIsSubsetOfArrayConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class AbstractIsSubsetOfArrayConstraintTest extends TestCase
{
	/**
	 * Tests if {@link AbstractIsSubsetOfArrayConstraint::__construct()} instantiates the constraint correctly.
	 * @param string $constraintClassName The class name of the constraint to test.
	 * @param array $array The array to pass.
	 * @param bool $strict The strict flag to pass.
	 */
	#[DataProviderExternal( ConstraintClassNamesWithArrayAndStrictFlagDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassName, array $array, bool $strict ): void
	{
		$resultedConstraint = new $constraintClassName( $array, $strict );

		static::assertInstanceOf( AbstractIsSubsetOfArrayConstraint::class, $resultedConstraint );
	}
}
