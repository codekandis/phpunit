<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\Helpers\AbstractArraySubsetHelperTest;

use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing array subset helper class names with strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelperClassNamesWithStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'arraySubsetHelperClassName' => KeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_FALSE
			],
			1 => [
				'arraySubsetHelperClassName' => KeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_TRUE
			],
			2 => [
				'arraySubsetHelperClassName' => UnkeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_FALSE
			],
			3 => [
				'arraySubsetHelperClassName' => UnkeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_TRUE
			]
		];
	}
}
