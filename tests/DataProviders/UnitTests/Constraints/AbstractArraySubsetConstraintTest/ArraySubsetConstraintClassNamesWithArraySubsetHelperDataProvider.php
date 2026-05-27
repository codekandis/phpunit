<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\AbstractArraySubsetConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ArraySubsetConstraintFixture;
use CodeKandis\PhpUnit\Tests\Fixtures\Objects\ArraySubsetHelperFixture;
use Override;

/**
 * Represents a data provider providing array subset constraint class names with array subset helper.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetConstraintClassNamesWithArraySubsetHelperDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'arraySubsetConstraintClassName' => ArraySubsetConstraintFixture::class,
				'arraySubsetHelper'              => new ArraySubsetHelperFixture()
			]
		];
	}
}
