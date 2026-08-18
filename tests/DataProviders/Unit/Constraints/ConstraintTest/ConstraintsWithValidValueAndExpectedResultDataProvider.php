<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...ConstraintsWithValidValueAndExpectedResultDataProvider0000::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0001::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0002::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0003::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0004::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0005::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0006::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0007::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0008::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0009::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0010::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0011::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0012::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0013::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0014::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0015::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0016::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0017::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0018::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0019::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0020::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0021::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0022::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0023::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0024::provideData(),
			...ConstraintsWithValidValueAndExpectedResultDataProvider0025::provideData()
		];
	}
}
