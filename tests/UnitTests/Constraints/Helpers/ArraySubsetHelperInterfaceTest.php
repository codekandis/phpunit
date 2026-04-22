<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints\Helpers;

use CodeKandis\PhpUnit\Constraints\Helpers\ArraySubsetHelperInterface;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\Helpers\ArraySubsetHelperInterfaceTest\ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ArraySubsetHelperInterface}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ArraySubsetHelperInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ArraySubsetHelperInterface::containsSubset()} returns the result correctly.
	 * @param ArraySubsetHelperInterface $arraySubsetHelper The array subset helper to test.
	 * @param array $array The value to pass.
	 * @param array $subset The subset to pass.
	 * @param bool $expectedResult The expected result.
	 * @return void
	 */
	#[DataProviderExternal( ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodContainsSubsetReturnsResultCorrectly( ArraySubsetHelperInterface $arraySubsetHelper, array $array, array $subset, bool $expectedResult ): void
	{
		$result = $arraySubsetHelper->containsSubset( $array, $subset );

		static::assertSame( $expectedResult, $result );
	}
}
