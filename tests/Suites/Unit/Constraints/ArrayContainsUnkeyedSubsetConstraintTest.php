<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ArrayContainsUnkeyedSubsetConstraintTest\ConstraintClassNamesWithSubsetAndStrictFlagDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ArrayContainsUnkeyedSubsetConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ArrayContainsUnkeyedSubsetConstraintTest extends TestCase
{
	/**
	 * Tests if {@link ArrayContainsUnkeyedSubsetConstraint::__construct()} instantiates the constraint correctly.
	 * @param class-string<ArrayContainsUnkeyedSubsetConstraint> $constraintClassName The class name of the constraint to test.
	 * @param array<array-key, mixed> $subset The subset to pass.
	 * @param bool $strict The strict flag to pass.
	 */
	#[DataProviderExternal( ConstraintClassNamesWithSubsetAndStrictFlagDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassName, array $subset, bool $strict ): void
	{
		$resultedConstraint = new $constraintClassName( $subset, $strict );

		static::assertInstanceOf( ArrayContainsUnkeyedSubsetConstraint::class, $resultedConstraint );
	}
}
