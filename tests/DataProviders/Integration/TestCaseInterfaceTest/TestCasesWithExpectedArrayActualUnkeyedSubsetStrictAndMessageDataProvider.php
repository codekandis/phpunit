<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing test cases with expected array, actual unkeyed subset, strict and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedArrayActualUnkeyedSubsetStrictAndMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...TestCasesWithExpectedArrayActualUnkeyedSubsetStrictAndMessageDataProvider0000::provideData(),
			...TestCasesWithExpectedArrayActualUnkeyedSubsetStrictAndMessageDataProvider0001::provideData()
		];
	}
}
