<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit\Constraints;

use CodeKandis\PhpUnit\Constraints\AbstractArraySubsetConstraint;
use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\AbstractArraySubsetConstraintTest\ArraySubsetConstraintClassFqcnsWithArraySubsetHelperDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractArraySubsetConstraint}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class AbstractArraySubsetConstraintTest extends TestCase
{
	/**
	 * Tests if {@link AbstractArraySubsetConstraint::__construct()} instantiates the constraint correctly.
	 * @param class-string<AbstractArraySubsetConstraint> $arraySubsetConstraintClassFqcn The FQCN of the constraint to test.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper to pass.
	 */
	#[DataProviderExternal( ArraySubsetConstraintClassFqcnsWithArraySubsetHelperDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $arraySubsetConstraintClassFqcn, ArraySubsetHelperInterface $arraySubsetHelper ): void
	{
		$resultedArraySubsetConstraint = new $arraySubsetConstraintClassFqcn( $arraySubsetHelper );

		static::assertInstanceOf( AbstractArraySubsetConstraint::class, $resultedArraySubsetConstraint );
	}
}
