<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\AbstractArrayContainsSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\AbstractArrayContainsSubsetConstraintTest\ConstraintClassFqcnsWithSubsetAndStrictFlagDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractArrayContainsSubsetConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class AbstractArrayContainsSubsetConstraintTest extends TestCase
{
	/**
	 * Tests if {@link AbstractArrayContainsSubsetConstraint::__construct()} instantiates the constraint correctly.
	 * @param class-string<AbstractArrayContainsSubsetConstraint> $constraintClassFqcn The FQCN of the constraint to test.
	 * @param array<array-key, mixed> $subset The subset to pass.
	 * @param bool $strict The strict flag to pass.
	 */
	#[DataProviderExternal( ConstraintClassFqcnsWithSubsetAndStrictFlagDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $constraintClassFqcn, array $subset, bool $strict ): void
	{
		$resultedConstraint = new $constraintClassFqcn( $subset, $strict );

		static::assertInstanceOf( AbstractArrayContainsSubsetConstraint::class, $resultedConstraint );
	}
}
