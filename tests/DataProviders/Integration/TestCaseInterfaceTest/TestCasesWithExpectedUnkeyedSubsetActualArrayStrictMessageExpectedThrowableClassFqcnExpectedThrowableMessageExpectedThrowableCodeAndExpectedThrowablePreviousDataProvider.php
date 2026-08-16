<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing test cases with expected unkeyed subset, actual array and expected throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedUnkeyedSubsetActualArrayStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/** {@inheritDoc} */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			...TestCasesWithExpectedUnkeyedSubsetActualArrayStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0000::provideData(),
			...TestCasesWithExpectedUnkeyedSubsetActualArrayStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0001::provideData(),
			...TestCasesWithExpectedUnkeyedSubsetActualArrayStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0002::provideData()
		];
	}
}
