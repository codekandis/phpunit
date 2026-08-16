<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents a data provider providing test cases with expected subset, actual array, strict, message and expected throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedSubsetActualArrayStrictMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0003 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			3000 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_16,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_17,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3001 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_16,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_17,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3002 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_16,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_17,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3003 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_16,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_17,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3004 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_0,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3005 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_0,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3006 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_0,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3007 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_0,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3008 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_1,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3009 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_1,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3010 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_1,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3011 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_1,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3012 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_2,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3013 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_2,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3014 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_2,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3015 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_2,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3016 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_3,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3017 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_3,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3018 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_3,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3019 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_3,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3020 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_4,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3021 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_4,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3022 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_4,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3023 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_4,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3024 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_5,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3025 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_5,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3026 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_5,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3027 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_5,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3028 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_6,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3029 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_6,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3030 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_6,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3031 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_6,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3032 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_7,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3033 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_7,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3034 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_7,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3035 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_7,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3036 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_8,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3037 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_8,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3038 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_8,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3039 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_8,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3040 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_9,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3041 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_9,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3042 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_9,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3043 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_9,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3044 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_10,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3045 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_10,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3046 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_10,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3047 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_10,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3048 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_11,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3049 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_11,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3050 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_11,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3051 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_11,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3052 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_0,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3053 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_0,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3054 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_0,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3055 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_0,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3056 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_1,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3057 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_1,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3058 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_1,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3059 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_1,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3060 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_2,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3061 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_2,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3062 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_2,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3063 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_2,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3064 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_3,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3065 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_3,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3066 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_3,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3067 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_3,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3068 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_4,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3069 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_4,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3070 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_4,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3071 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_4,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3072 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_5,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3073 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_5,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3074 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_5,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3075 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_5,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3076 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_6,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3077 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_6,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3078 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_6,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3079 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_6,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3080 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_7,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3081 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_7,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3082 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_7,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3083 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_7,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3084 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_8,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3085 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_8,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3086 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_8,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3087 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_8,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3088 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_9,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3089 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_9,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3090 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_9,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3091 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_9,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3092 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_10,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3093 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_10,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3094 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_10,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3095 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_10,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3096 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_11,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3097 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_11,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3098 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_11,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3099 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_11,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3100 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_12,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3101 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_12,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3102 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_12,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3103 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_12,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3104 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_13,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3105 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_13,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3106 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_13,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3107 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_13,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3108 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_14,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3109 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_14,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3110 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_14,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3111 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_14,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3112 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_15,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3113 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_15,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3114 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_15,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3115 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_15,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3116 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_16,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3117 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_16,
				'strict'                     => $strict = Values::BOOLEAN_FALSE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3118 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_16,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_0,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			],
			3119 => [
				'testCase'                   => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset'             => $expectedSubset = Values::ARRAY_SUBSET_17,
				'actualArray'                => $actualArray = Values::ARRAY_SUBSET_16,
				'strict'                     => $strict = Values::BOOLEAN_TRUE,
				'message'                    => $message = Values::STRING_1,
				'expectedThrowableClassFqcn' => ExpectationFailedException::class,
				'expectedThrowableMessage'   => static::buildExpectedThrowableMessage( $actualArray, $expectedSubset, $strict, $message ),
				'expectedThrowableCode'      => 0,
				'expectedThrowablePrevious'  => null
			]
		];
	}

	/**
	 * Builds the expected throwable message.
	 * @param array $actualArray The actualArray.
	 * @param array $expectedSubset The expectedSubset.
	 * @param bool $strict The strict flag to pass.
	 * @param string $message The message to pass.
	 * @return string The expected throwable message.
	 */
	private static function buildExpectedThrowableMessage( array $actualArray, array $expectedSubset, bool $strict, string $message ): string
	{
		$messagePrefix = Values::EMPTY_STRING === $message
			? Values::EMPTY_STRING
			: sprintf( '%1$s%2$s', $message, "\n" );
		$constraint    = new ArrayContainsKeyedSubsetConstraint( $expectedSubset, $strict );

		return sprintf(
			'%1$sFailed asserting that %2$s%3$s.',
			$messagePrefix,
			new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
				->valueToTypeStringFragment( $actualArray ),
			$constraint->toString()
		);
	}
}
