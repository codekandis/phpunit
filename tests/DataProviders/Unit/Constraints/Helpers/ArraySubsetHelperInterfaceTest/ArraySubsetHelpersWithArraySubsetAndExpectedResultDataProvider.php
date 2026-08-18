<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\Helpers\ArraySubsetHelperInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0000::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0001::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0002::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0003::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0004::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0005::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0006::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0007::provideData(),
			...ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0008::provideData()
		];
	}
}
