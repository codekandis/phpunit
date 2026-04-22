<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints;

use CodeKandis\PhpUnit\Constraints\AbstractArraySubsetConstraint;
use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\AbstractArraySubsetConstraintTest\ArraySubsetConstraintClassNamesWithArraySubsetHelperDataProvider;
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
	 * @param string $arraySubsetConstraintClassName The class name of the constraint to test.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper to pass.
	 */
	#[DataProviderExternal( ArraySubsetConstraintClassNamesWithArraySubsetHelperDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesConstraintCorrectly( string $arraySubsetConstraintClassName, ArraySubsetHelperInterface $arraySubsetHelper ): void
	{
		$resultedArraySubsetConstraint = new $arraySubsetConstraintClassName( $arraySubsetHelper );

		static::assertInstanceOf( AbstractArraySubsetConstraint::class, $resultedArraySubsetConstraint );
	}
}
