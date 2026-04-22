<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests\Constraints\Helpers;

use CodeKandis\PhpUnit\Constraints\Helpers\AbstractArraySubsetHelper;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\Accessors\ArraySubsetHelperExposingValuesAreEqualMethodAccessor;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\Helpers\AbstractArraySubsetHelperTest\ArraySubsetHelperClassNamesWithStrictFlagDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\Helpers\AbstractArraySubsetHelperTest\ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link AbstractArraySubsetHelper}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class AbstractArraySubsetHelperTest extends TestCase
{
	/**
	 * Tests if {@link AbstractArraySubsetHelper::__construct()} instantiates the array subset helper correctly.
	 * @param string $arraySubsetHelperClassName The class name of the array subset helper to test.
	 * @param bool $strict The strict flag to pass.
	 */
	#[DataProviderExternal( ArraySubsetHelperClassNamesWithStrictFlagDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfConstructorInstantiatesArraySubsetHelperCorrectly( string $arraySubsetHelperClassName, bool $strict ): void
	{
		$resultedArraySubsetHelper = new $arraySubsetHelperClassName( $strict );

		static::assertInstanceOf( AbstractArraySubsetHelper::class, $resultedArraySubsetHelper );
	}

	/**
	 * Tests if {@link AbstractArraySubsetHelper::valuesAreEqual()} determines the value equality correctly.
	 * @param ArraySubsetHelperExposingValuesAreEqualMethodAccessor $arraySubsetHelper The array subset helper to test.
	 * @param mixed $expectedValue The expected value to pass.
	 * @param mixed $actualValue The actual value to pass.
	 * @param bool $expectedResult The expected result.
	 */
	#[DataProviderExternal( ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfValuesAreEqualDeterminesValueEqualityCorrectly( ArraySubsetHelperExposingValuesAreEqualMethodAccessor $arraySubsetHelper, mixed $expectedValue, mixed $actualValue, bool $expectedResult ): void
	{
		$resultedValueEquality = $arraySubsetHelper->valuesAreEqual( $expectedValue, $actualValue );

		static::assertSame( $expectedResult, $resultedValueEquality );
	}
}
