<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing test cases with expected unkeyed subset, actual array, strict and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedUnkeyedSubsetActualArrayStrictAndMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...TestCasesWithExpectedUnkeyedSubsetActualArrayStrictAndMessageDataProvider0000::provideData(),
			...TestCasesWithExpectedUnkeyedSubsetActualArrayStrictAndMessageDataProvider0001::provideData()
		];
	}
}
