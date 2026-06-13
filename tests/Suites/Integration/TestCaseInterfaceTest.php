<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\Suites\Integration;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\TestCase;
use CodeKandis\PhpUnit\TestCaseInterface;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithArraysArraySubsetsStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithArraySubsetsArraysStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithExpectedInterfaceOrClassFqcnActualAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithMismatchingArraysArraySubsetsStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithMismatchingArraySubsetsArraysStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithMismatchingInterfaceOrClassFqcnActualMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithMismatchingUnkeyedArraysArraySubsetsStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithMismatchingUnkeyedArraySubsetsArraysStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithUnkeyedArraysArraySubsetsStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithUnkeyedArraySubsetsArraysStrictFlagAndMessageDataProvider;
use CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest\TestCasesWithUnknownInterfaceOrClassFqcnActualMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
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
	 * @param array<array-key, mixed> $expectedSubset The expected subset to test.
	 * @param array<array-key, mixed> $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param class-string<ExpectationFailedException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingArraySubsetsArraysStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsKeyedSubsetThrowsExpectationFailedExceptionOnArrayNotContainingKeyedSubset( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertArrayContainsKeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ExpectationFailedException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsKeyedSubset()} asserts that an array contains a keyed subset correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array<array-key, mixed> $expectedSubset The expected subset to pass.
	 * @param array<array-key, mixed> $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithArraySubsetsArraysStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsKeyedSubsetAssertsThatArrayContainsKeyedSubsetCorrectly( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message ): void
	{
		$unexpectedThrowable = null;

		try
		{
			$testCase::assertArrayContainsKeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$unexpectedThrowable = $throwable;
		}

		static::assertNull( $unexpectedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsUnkeyedSubset()} throws an {@link ExpectationFailedException} on an array not containing an unkeyed subset.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array<array-key, mixed> $expectedSubset The expected subset to test.
	 * @param array<array-key, mixed> $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param class-string<ExpectationFailedException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingUnkeyedArraySubsetsArraysStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsUnkeyedSubsetThrowsExpectationFailedExceptionOnArrayNotContainingUnkeyedSubset( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertArrayContainsUnkeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ExpectationFailedException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertArrayContainsUnkeyedSubset()} asserts that an array contains an unkeyed subset correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array<array-key, mixed> $expectedSubset The expected subset to pass.
	 * @param array<array-key, mixed> $actualArray The actual arrayto pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithUnkeyedArraySubsetsArraysStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertArrayContainsUnkeyedSubsetAssertsThatArrayContainsUnkeyedSubsetCorrectly( TestCaseInterface $testCase, array $expectedSubset, array $actualArray, bool $strict, string $message ): void
	{
		$unexpectedThrowable = null;

		try
		{
			$testCase::assertArrayContainsUnkeyedSubset( $expectedSubset, $actualArray, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$unexpectedThrowable = $throwable;
		}

		static::assertNull( $unexpectedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsKeyedSubsetOfArray()} throws an {@link ExpectationFailedException} on an array not being a keyed subset of another array.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array<array-key, mixed> $expectedArray The expected array to test.
	 * @param array<array-key, mixed> $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param class-string<ExpectationFailedException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingArraysArraySubsetsStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsKeyedSubsetOfArrayThrowsExpectationFailedExceptionOnArrayNotBeingKeyedSubsetOfArray( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertIsKeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ExpectationFailedException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsKeyedSubsetOfArray()} asserts that an array is a keyed subset of another array correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array<array-key, mixed> $expectedArray The expected array to pass.
	 * @param array<array-key, mixed> $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithArraysArraySubsetsStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsKeyedSubsetOfArrayAssertsThatArrayIsKeyedSubsetOfArrayCorrectly( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message ): void
	{
		$unexpectedThrowable = null;

		try
		{
			$testCase::assertIsKeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$unexpectedThrowable = $throwable;
		}

		static::assertNull( $unexpectedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsUnkeyedSubsetOfArray()} throws an {@link ExpectationFailedException} on an array not being an unkeyed subset of another array.
	 * @param TestCaseInterface $testCase The test case.
	 * @param array<array-key, mixed> $expectedArray The expected array to test.
	 * @param array<array-key, mixed> $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @param class-string<ExpectationFailedException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingUnkeyedArraysArraySubsetsStrictFlagMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsUnkeyedSubsetOfArrayThrowsExpectationFailedExceptionOnArrayNotBeingUnkeyedSubsetOfArray( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertIsUnkeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ExpectationFailedException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsUnkeyedSubsetOfArray()} asserts that an array is an unkeyed subset of another array correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param array<array-key, mixed> $expectedArray The expected array to pass.
	 * @param array<array-key, mixed> $actualSubset The actual subset to pass.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithUnkeyedArraysArraySubsetsStrictFlagAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsUnkeyedSubsetOfArrayAssertsThatArrayIsUnkeyedSubsetOfArrayCorrectly( TestCaseInterface $testCase, array $expectedArray, array $actualSubset, bool $strict, string $message ): void
	{
		$unexpectedThrowable = null;

		try
		{
			$testCase::assertIsUnkeyedSubsetOfArray( $expectedArray, $actualSubset, $strict, $message );
		}
		catch ( Throwable $throwable )
		{
			$unexpectedThrowable = $throwable;
		}

		static::assertNull( $unexpectedThrowable );
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} throws an {@link UnknownClassOrInterfaceException} on unknown interface or class FQCN.
	 * @param TestCaseInterface $testCase The test case.
	 * @param string $expectedInterfaceOrClassFqcn The expected interface or class FQCN to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 * @param class-string<UnknownClassOrInterfaceException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithUnknownInterfaceOrClassFqcnActualMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfThrowsUnknownClassOrInterfaceExceptionOnUnknownInterfaceOrClassFqcn( TestCaseInterface $testCase, string $expectedInterfaceOrClassFqcn, mixed $actual, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassFqcn, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( UnknownClassOrInterfaceException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} throws an {@link ExpectationFailedException} on a value not being a subclass of or implementing an interface or class.
	 * @param TestCaseInterface $testCase The test case.
	 * @param class-string $expectedInterfaceOrClassFqcn The expected interface or class FQCN to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 * @param class-string<ExpectationFailedException> $expectedThrowableClassFqcn The expected throwable class FQCN.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 */
	#[DataProviderExternal( TestCasesWithMismatchingInterfaceOrClassFqcnActualMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfThrowsExpectationFailedExceptionOnValueNotBeingSubClassOf( TestCaseInterface $testCase, string $expectedInterfaceOrClassFqcn, mixed $actual, string $message, string $expectedThrowableClassFqcn, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassFqcn, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ExpectationFailedException::class, $throwable );

			$resultedThrowableClassFqcn = $throwable::class;
			static::assertSame( $expectedThrowableClassFqcn, $resultedThrowableClassFqcn );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown();
	}

	/**
	 * Tests if {@link TestCaseInterface::assertIsSubClassOf()} asserts that a value is a subclass of or implements an interface or class correctly.
	 * @param TestCaseInterface $testCase The test case to test.
	 * @param class-string $expectedInterfaceOrClassFqcn The expected interface or class FQCN to pass.
	 * @param mixed $actual The actual value to pass.
	 * @param string $message The message to pass.
	 */
	#[DataProviderExternal( TestCasesWithExpectedInterfaceOrClassFqcnActualAndMessageDataProvider::class, DataProviderInterface::PROVIDER_METHOD_NAME )]
	public function testIfMethodAssertIsSubClassOfAssertsThatValueIsSubClassOfCorrectly( TestCaseInterface $testCase, string $expectedInterfaceOrClassFqcn, mixed $actual, string $message ): void
	{
		$unexpectedThrowable = null;

		try
		{
			$testCase::assertIsSubClassOf( $expectedInterfaceOrClassFqcn, $actual, $message );
		}
		catch ( Throwable $throwable )
		{
			$unexpectedThrowable = $throwable;
		}

		static::assertNull( $unexpectedThrowable );
	}
}
