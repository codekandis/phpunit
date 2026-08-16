<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing test cases with expected array, actual unkeyed subset and expected throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedArrayActualUnkeyedSubsetStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/** {@inheritDoc} */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...TestCasesWithExpectedArrayActualUnkeyedSubsetStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0000::provideData(),
			...TestCasesWithExpectedArrayActualUnkeyedSubsetStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0001::provideData(),
			...TestCasesWithExpectedArrayActualUnkeyedSubsetStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0002::provideData()
		];
	}
}
