<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\TestCaseTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\AssertionFailedError;
use Throwable;

/**
 * Represents a data provider providing test cases with expected throwable FQCN, expected throwable class FQCN and expected throwable message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedThrowableFqcnExpectedThrowableClassFqcnAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'testCase'                   => new TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor( Values::EMPTY_STRING ),
				'expectedThrowableFqcn'      => $expectedThrowableFqcn = Throwable::class,
				'expectedThrowableClassFqcn' => AssertionFailedError::class,
				'expectedThrowableMessage'   => sprintf( TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor::EXCEPTION_MESSAGE_WITH_EXPECTED_THROWABLE_FQCN_TEMPLATE, $expectedThrowableFqcn )
			]
		];
	}
}
