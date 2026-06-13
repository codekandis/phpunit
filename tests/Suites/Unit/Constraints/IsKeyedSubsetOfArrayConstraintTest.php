<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsKeyedSubsetOfArrayConstraintTest\ConstraintClassFqcnsWithArrayAndStrictFlagDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link IsKeyedSubsetOfArrayConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class IsKeyedSubsetOfArrayConstraintTest extends TestCase
{
	/**
	 * Tests if {@link IsKeyedSubsetOfArrayConstraint::__construct()} instantiates the constraint correctly.
	 * @param class-string<IsKeyedSubsetOfArrayConstraint> $constraintClassFqcn The FQCN of the constraint to test.
	 * @param array<array-key, mixed> $array The array to pass.
	 * @param bool $strict The strict flag to pass.
	 */
	#[DataProviderExternal( ConstraintClassFqcnsWithArrayAndStrictFlagDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassFqcn, array $array, bool $strict ): void
	{
		$resultedConstraint = new $constraintClassFqcn( $array, $strict );

		static::assertInstanceOf( IsKeyedSubsetOfArrayConstraint::class, $resultedConstraint );
	}
}
