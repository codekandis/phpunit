<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Unit;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor;
use CodeKandis\PhpUnit\Tests\DataProviders\Unit\TestCaseTest\TestCasesWithExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link TestCase}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TestCaseTest extends TestCase
{
	/**
	 * Tests if {@link TestCase::failExpectedThrowableHasNotBeenThrown()} fails with the expected throwable has not been thrown message.
	 * @param TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor $testCase The test case to test.
	 * @param class-string<AssertionFailedError> $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @return void
	 */
	#[DataProviderExternal( TestCasesWithExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodFailExpectedThrowableHasNotBeenThrownFailsWithExpectedThrowableHasNotBeenThrownMessage( TestCaseExposingFailExpectedThrowableHasNotBeenThrownMethodAccessor $testCase, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$testCase->failExpectedThrowableHasNotBeenThrown();
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( AssertionFailedError::class, $throwable );

			$resultedThrowableClassName = $throwable::class;
			static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			return;
		}

		static::fail( 'The expected throwable has not been thrown.' );
	}
}
