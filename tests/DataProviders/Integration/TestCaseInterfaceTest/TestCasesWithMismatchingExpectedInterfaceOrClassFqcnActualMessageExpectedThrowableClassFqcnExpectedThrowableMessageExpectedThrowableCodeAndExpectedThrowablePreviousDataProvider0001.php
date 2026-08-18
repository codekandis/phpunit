<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents a data provider providing test cases with mismatching expected interface or class FQCN and actual value.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithMismatchingExpectedInterfaceOrClassFqcnActualMessageExpectedThrowableClassFqcnExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0001 implements DataProviderInterface
{
	/** {@inheritDoc} */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1001 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1002 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1003 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1004 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1005 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1006 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1007 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1008 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1009 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1010 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1011 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1012 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1013 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1014 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1015 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::INTERFACE_FQCN_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1016 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_FQCN,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1017 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_FQCN,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1018 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1019 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1020 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1021 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1022 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1023 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1024 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1025 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1026 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1027 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1028 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1029 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1030 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1031 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1032 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1033 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1034 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1035 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1036 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1037 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1038 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1039 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1040 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1041 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::CLASS_FQCN_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1042 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_FQCN,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1043 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_FQCN,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1044 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_0(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1045 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_0(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1046 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_1(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1047 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_1(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1048 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_2(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1049 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_2(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1050 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_3(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1051 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_3(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1052 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_4(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1053 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_4(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1054 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_5(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1055 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_5(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1056 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_6(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1057 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_6(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1058 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_7(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1059 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_7(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1060 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_8(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1061 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_8(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1062 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_9(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1063 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_9(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1064 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_10(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1065 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_10(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1066 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_11(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			1067 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => $expectedInterfaceOrClassFqcn = Values::CLASS_FQCN_11,
				'actual'                       => $actual = Values::createClassFixture_11(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassFqcn'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassFqcn, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			]
		];
	}

	private static function buildExpectedThrowableMessage( mixed $actual, string $expectedInterfaceOrClassFqcn, string $message ): string
	{
		$messagePrefix = Values::EMPTY_STRING === $message
			? Values::EMPTY_STRING
			: sprintf( '%1$s%2$s', $message, "\n" );
		$constraint    = new IsSubClassOfConstraint( $expectedInterfaceOrClassFqcn );

		return sprintf(
			'%1$sFailed asserting that %2$s%3$s.',
			$messagePrefix,
			new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
				->valueToTypeStringFragment( $actual ),
			$constraint->toString()
		);
	}
}
