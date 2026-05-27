<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\UnitTests;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\TestCaseInterface;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithArraysArraySubsetsStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithArraySubsetsArraysStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithInterfaceOrClassNameActualAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithMismatchingArraysArraySubsetsStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithMismatchingArraySubsetsArraysStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithMismatchingInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithMismatchingUnkeyedArraysArraySubsetsStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithMismatchingUnkeyedArraySubsetsArraysStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithUnkeyedArraysArraySubsetsStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithUnkeyedArraySubsetsArraysStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest\TestCasesWithUnknownInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\UnknownClassOrInterfaceException;
use Throwable;

/**
 * Represents the test case of {@link TestCaseInterface}.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TestCaseInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsKeyedSubset()} throws an {@link ExpectationFailedException} on an array not containing a keyed subset.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array $expectedSubset The expected subset to test.
	 * @param array $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingArraySubsetsArraysStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsKeyedSubsetThrowsExpectationFailedExceptionOnArrayNotContainingKeyedSubset( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertArrayContainsKeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsKeyedSubset()} asserts that an array contains a keyed subset correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array $expectedSubset The expected subset to pass.
	 * @param array $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithArraySubsetsArraysStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsKeyedSubsetAssertsThatArrayContainsKeyedSubsetCorrectly( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message ): void
	{
		$resultedThrowable = null;

		try
		{
			$testCase::assertArrayContainsKeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowable = $throwable;
		}

		static::assertNull( $resultedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsUnkeyedSubset()} throws an {@link ExpectationFailedException} on an array not containing an unkeyed subset.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array $expectedSubset The expected subset to test.
	 * @param array $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingUnkeyedArraySubsetsArraysStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsUnkeyedSubsetThrowsExpectationFailedExceptionOnArrayNotContainingUnkeyedSubset( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertArrayContainsUnkeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsUnkeyedSubset()} asserts that an array contains an unkeyed subset correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array $expectedSubset The expected subset to pass.
	 * @param array $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithUnkeyedArraySubsetsArraysStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsUnkeyedSubsetAssertsThatArrayContainsUnkeyedSubsetCorrectly( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message ): void
	{
		$resultedThrowable = null;

		try
		{
			$testCase::assertArrayContainsUnkeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowable = $throwable;
		}

		static::assertNull( $resultedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsKeyedSubsetOfArray()} throws an {@link ExpectationFailedException} on an array not being a keyed subset of another array.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array $expectedArray The expected array to test.
	 * @param array $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingArraysArraySubsetsStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsKeyedSubsetOfArrayThrowsExpectationFailedExceptionOnArrayNotBeingKeyedSubsetOfArray( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertIsKeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsKeyedSubsetOfArray()} asserts that an array is a keyed subset of another array correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array $expectedArray The expected array to pass.
	 * @param array $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithArraysArraySubsetsStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsKeyedSubsetOfArrayAssertsThatArrayIsKeyedSubsetOfArrayCorrectly( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message ): void
	{
		$resultedThrowable = null;

		try
		{
			$testCase::assertIsKeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowable = $throwable;
		}

		static::assertNull( $resultedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsUnkeyedSubsetOfArray()} throws an {@link ExpectationFailedException} on an array not being an unkeyed subset of another array.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array $expectedArray The expected array to test.
	 * @param array $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingUnkeyedArraysArraySubsetsStrictFlagMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsUnkeyedSubsetOfArrayThrowsExpectationFailedExceptionOnArrayNotBeingUnkeyedSubsetOfArray( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertIsUnkeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsUnkeyedSubsetOfArray()} asserts that an array is an unkeyed subset of another array correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array $expectedArray The expected array to pass.
	 * @param array $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithUnkeyedArraysArraySubsetsStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsUnkeyedSubsetOfArrayAssertsThatArrayIsUnkeyedSubsetOfArrayCorrectly( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message ): void
	{
		$resultedThrowable = null;

		try
		{
			$testCase::assertIsUnkeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowable = $throwable;
		}

		static::assertNull( $resultedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} throws an {@link UnknownClassOrInterfaceException} on unknown interface or class name.
	 * @param TestCaseInterface $testCase The test case.
	 * @param string $expectedInterfaceOrClassName The expected interface or class name to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithUnknownInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfThrowsUnknownClassOrInterfaceExceptionOnUnknownInterfaceOrClassName( TestCaseInterface $testCase, string $expectedInterfaceOrClassName, mixed $actual, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassName, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( UnknownClassOrInterfaceException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} throws an {@link ExpectationFailedException} on a value not being a subclass of or implementing an interface or class.
	 * @param TestCaseInterface $testCase The test case.
	 * @param string $expectedInterfaceOrClassName The expected interface or class name to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 * @param string $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedPreviousThrowable The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfThrowsExpectationFailedExceptionOnValueNotBeingSubClassOf( TestCaseInterface $testCase, string $expectedInterfaceOrClassName, mixed $actual, string $message, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedPreviousThrowable ): void
	{
		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassName, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowableMessage  = $throwable->getMessage();
			$resultedThrowableCode     = $throwable->getCode();
			$resultedPreviousThrowable = $throwable->getPrevious();

			static::assertInstanceOf( ExpectationFailedException::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
			static::assertSame( $expectedPreviousThrowable, $resultedPreviousThrowable );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} asserts that a value is a subclass of or implements an interface or class correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param string $expectedInterfaceOrClassName The expected interface or class name to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithInterfaceOrClassNameActualAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfAssertsThatValueIsSubClassOfCorrectly( TestCaseInterface $testCase, string $expectedInterfaceOrClassName, mixed $actual, string $message ): void
	{
		$resultedThrowable = null;

		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassName, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			$resultedThrowable = $throwable;
		}

		static::assertNull( $resultedThrowable );
	}
}
