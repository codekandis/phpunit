<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\TestCaseTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseExposingFailUnexpectedThrowableHasBeenThrownMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\AssertionFailedError;
use Throwable;

/**
 * Represents a data provider providing test cases with unexpected throwable FQCN, expected throwable class FQCN and expected throwable message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithUnexpectedThrowableFqcnExpectedThrowableClassFqcnAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'testCase'                   => new TestCaseExposingFailUnexpectedThrowableHasBeenThrownMethodAccessor( Values::EMPTY_STRING ),
				'unexpectedThrowableFqcn'    => $unexpectedThrowableFqcn = Throwable::class,
				'expectedThrowableClassFqcn' => AssertionFailedError::class,
				'expectedThrowableMessage'   => sprintf( TestCaseExposingFailUnexpectedThrowableHasBeenThrownMethodAccessor::EXCEPTION_MESSAGE_WITH_UNEXPECTED_THROWABLE_FQCN_TEMPLATE, $unexpectedThrowableFqcn )
			]
		];
	}
}
