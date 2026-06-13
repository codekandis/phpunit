<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\Helpers\AbstractArraySubsetHelperTest;

use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing array subset helper FQCNs with strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelperClassFqcnsWithStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'arraySubsetHelperClassFqcn' => KeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_FALSE
			],
			1 => [
				'arraySubsetHelperClassFqcn' => KeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_TRUE
			],
			2 => [
				'arraySubsetHelperClassFqcn' => UnkeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_FALSE
			],
			3 => [
				'arraySubsetHelperClassFqcn' => UnkeyedArraySubsetHelper::class,
				'strict'                     => Values::BOOLEAN_TRUE
			]
		];
	}
}
