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
 * Represents a data provider providing test cases with mismatching interface or class name, actual value, message, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithMismatchingInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
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
				'expectedThrowablePrevious'    => null
			],
			1   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			2   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			3   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			4   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			5   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			6   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			7   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			8   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			9   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			10  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			11  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			12  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			13  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			14  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			15  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			16  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			17  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			18  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			19  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			20  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			21  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			22  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			23  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			24  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			25  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			26  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			27  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			28  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			29  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			30  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			31  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			32  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			33  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			34  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			35  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			36  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			37  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			38  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			39  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			40  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			41  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			42  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			43  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			44  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			45  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			46  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			47  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			48  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			49  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			50  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			51  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			52  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			53  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			54  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			55  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			56  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			57  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			58  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			59  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			60  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			61  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			62  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			63  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			64  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			65  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			66  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			67  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			68  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			69  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			70  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			71  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			72  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			73  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			74  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			75  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			76  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			77  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			78  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			79  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			80  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			81  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			82  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			83  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			84  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			85  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			86  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			87  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			88  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			89  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			90  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			91  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			92  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			93  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			94  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			95  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			96  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			97  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			98  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			99  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			100 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			101 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			102 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			103 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			104 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			105 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::INTERFACE_NAME,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			106 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			107 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			108 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			109 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			110 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			111 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			112 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			113 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			114 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			115 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			116 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			117 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			118 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			119 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			120 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			121 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			122 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			123 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			124 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			125 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			126 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			127 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			128 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			129 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			130 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			131 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			132 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			133 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			134 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			135 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			136 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			137 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			138 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			139 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			140 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			141 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			142 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			143 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			144 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			145 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			146 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			147 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			148 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			149 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			150 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			151 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			152 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			153 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			154 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			155 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			156 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			157 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			158 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			159 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			160 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			161 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			162 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			163 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			164 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			165 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			166 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			167 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			168 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			169 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			170 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			171 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			172 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			173 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			174 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			175 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			176 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			177 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			178 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			179 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			180 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			181 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			182 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			183 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			184 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			185 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			186 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			187 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			188 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			189 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			190 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			191 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			192 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			193 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			194 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			195 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			196 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			197 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			198 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			199 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			200 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			201 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			202 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			203 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			204 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			205 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			206 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			207 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			208 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			209 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			210 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			211 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			212 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			213 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			214 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			215 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_0,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			216 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			217 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			218 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			219 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::NULL_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			220 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			221 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			222 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			223 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			224 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			225 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			226 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			227 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			228 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			229 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			230 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			231 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			232 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			233 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			234 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			235 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			236 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			237 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			238 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			239 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			240 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			241 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			242 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			243 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTEGER_STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			244 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			245 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			246 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			247 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::FLOAT_STRING,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			248 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			249 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			250 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			251 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::STRING_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			252 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			253 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			254 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			255 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			256 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			257 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			258 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			259 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::CLASS_NAME_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			260 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			261 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::UNKNOWN_CLASS_NAME,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			262 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			263 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			264 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			265 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			266 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			267 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			268 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			269 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			270 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			271 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			272 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			273 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			274 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			275 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			276 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			277 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			278 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			279 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			280 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			281 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			282 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			283 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			284 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			285 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			286 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			287 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_0,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			288 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			289 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_1,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			290 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			291 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_2,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			292 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			293 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_3,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			294 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			295 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_4,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			296 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			297 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_5,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			298 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			299 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_6,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			300 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			301 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_7,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			302 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			303 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_8,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			304 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			305 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_9,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			306 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			307 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_10,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			308 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			309 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_11,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			310 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			311 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_12,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			312 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			313 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_13,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			314 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			315 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_14,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			316 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			317 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_15,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			318 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			319 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_16,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			320 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			321 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::ARRAY_SUBSET_17,
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			322 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			323 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			324 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_0,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
			],
			325 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::CLASS_NAME_1,
				'actual'                       => $actual = Values::createImplementingClassFixture(),
				'message'                      => $message = Values::STRING_1,
				'expectedThrowableClassName'   => ExpectationFailedException::class,
				'expectedThrowableMessage'     => static::buildExpectedThrowableMessage( $actual, $expectedInterfaceOrClassName, $message ),
				'expectedThrowableCode'        => 0,
				'expectedThrowablePrevious'    => null
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
