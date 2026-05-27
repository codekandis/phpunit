<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ConstraintExposingValueToTypeStringFragmentMethodAccessor;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\ExpectationFailedException;

/**
 * Represents a data provider providing test cases with mismatching interface or class name, actual value, message, expected throwable class name, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithMismatchingInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			1   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			2   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			3   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			4   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			5   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			6   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			7   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			8   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			9   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			10  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			11  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			12  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			13  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			14  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			15  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			16  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			17  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			18  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			19  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			20  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			21  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			22  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			23  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			24  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			25  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			26  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			27  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			28  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			29  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			30  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			31  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			32  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			33  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			34  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			35  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			36  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			37  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			38  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			39  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			40  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			41  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			42  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			43  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			44  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			45  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			46  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			47  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			48  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			49  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			50  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			51  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			52  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			53  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			54  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			55  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			56  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			57  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			58  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			59  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			60  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			61  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			62  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			63  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			64  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			65  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			66  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			67  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			68  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			69  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			70  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			71  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			72  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			73  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			74  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			75  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			76  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			77  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			78  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			79  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			80  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			81  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			82  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			83  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			84  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			85  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			86  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			87  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			88  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			89  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			90  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			91  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			92  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			93  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			94  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			95  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			96  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			97  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			98  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			99  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			100 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			101 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			102 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			103 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			104 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			105 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			106 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			107 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			108 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			109 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			110 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			111 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			112 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			113 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			114 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			115 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			116 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			117 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			118 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			119 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			120 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			121 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			122 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			123 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			124 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			125 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			126 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			127 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			128 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			129 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			130 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			131 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			132 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			133 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			134 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			135 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			136 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			137 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			138 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			139 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			140 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			141 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			142 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			143 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			144 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			145 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			146 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			147 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			148 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			149 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			150 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			151 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			152 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			153 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			154 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			155 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			156 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			157 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			158 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			159 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			160 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			161 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			162 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			163 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			164 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			165 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			166 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			167 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			168 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			169 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			170 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			171 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			172 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			173 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			174 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			175 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			176 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			177 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			178 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			179 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			180 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			181 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			182 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			183 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			184 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			185 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			186 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			187 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			188 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			189 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			190 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			191 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			192 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			193 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			194 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			195 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			196 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			197 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			198 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			199 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			200 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			201 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			202 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			203 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			204 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			205 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			206 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			207 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			208 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			209 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			210 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			211 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			212 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			213 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			214 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			215 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			216 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			217 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			218 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			219 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			220 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			221 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			222 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			223 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			224 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			225 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			226 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			227 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			228 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			229 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			230 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			231 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			232 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			233 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			234 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			235 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			236 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			237 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			238 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			239 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			240 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			241 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			242 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			243 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			244 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			245 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			246 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			247 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			248 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			249 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			250 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			251 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			252 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			253 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			254 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			255 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			256 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			257 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			258 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			259 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			260 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			261 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			262 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			263 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			264 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			265 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			266 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			267 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			268 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			269 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			270 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			271 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			272 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			273 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			274 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			275 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			276 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			277 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			278 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			279 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			280 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			281 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			282 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			283 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			284 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			285 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			286 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			287 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			288 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			289 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			290 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			291 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			292 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			293 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			294 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			295 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			296 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			297 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			298 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			299 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			300 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			301 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			302 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			303 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			304 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			305 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			306 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			307 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			308 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			309 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			310 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			311 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			312 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			313 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			314 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			315 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			316 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			317 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			318 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			319 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			320 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			321 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			322 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			323 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			324 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			325 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			]
		];
	}

	/**
	 * Builds the expected throwable message.
	 * @param mixed $actual The actual value.
	 * @param string $expectedInterfaceOrClassName The expected interface or class name.
	 * @param string $message The message to pass.
	 * @return string The expected throwable message.
	 */
	private static function buildExpectedThrowableMessage( mixed $actual, string $expectedInterfaceOrClassName, string $message ): string
	{
		$messagePrefix = Values::EMPTY_STRING === $message
			? Values::EMPTY_STRING
			: sprintf( '%1$s%2$s', $message, "\n" );
		$constraint    = new IsSubClassOfConstraint( $expectedInterfaceOrClassName );

		return sprintf(
			'%1$sFailed asserting that %2$s%3$s.',
			$messagePrefix,
			new ConstraintExposingValueToTypeStringFragmentMethodAccessor()
				->valueToTypeStringFragment( $actual ),
			$constraint->toString()
		);
	}
}
