<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\Helpers\AbstractArraySubsetHelperTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing array subset helpers with expected value, actual value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0000::provideData(),
			...ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0001::provideData()
		];
	}
}
