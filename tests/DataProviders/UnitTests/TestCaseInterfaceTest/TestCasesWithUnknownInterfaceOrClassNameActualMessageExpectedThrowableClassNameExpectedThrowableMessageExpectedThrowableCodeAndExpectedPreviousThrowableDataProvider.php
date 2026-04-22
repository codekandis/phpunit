<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\ExceptionMessages;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use PHPUnit\Framework\UnknownClassOrInterfaceException;

/**
 * Represents a data provider providing test cases with unknown interface or class name, actual value, message, expected throwable class name, expected throwable message, expected throwable code and expected previous throwable.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithUnknownInterfaceOrClassNameActualMessageExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedPreviousThrowableDataProvider implements DataProviderInterface
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
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::NULL,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			1   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::NULL,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			2   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::NULL_STRING,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			3   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::NULL_STRING,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			4   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			5   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			6   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			7   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			8   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			9   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			10  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			11  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			12  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_STRING_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			13  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_STRING_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			14  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_STRING_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			15  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_STRING_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			16  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			17  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			18  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			19  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			20  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			21  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			22  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			23  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			24  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_STRING_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			25  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_STRING_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			26  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_STRING_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			27  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTEGER_STRING_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			28  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::FLOAT,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			29  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::FLOAT,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			30  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::FLOAT_STRING,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			31  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::FLOAT_STRING,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			32  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::STRING_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			33  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::STRING_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			34  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::STRING_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			35  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::STRING_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			36  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTERFACE_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			37  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::INTERFACE_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			38  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			39  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			40  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			41  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			42  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			43  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			44  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::UNKNOWN_CLASS_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			45  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::UNKNOWN_CLASS_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			46  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			47  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			48  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			49  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			50  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_2,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			51  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_2,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			52  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_3,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			53  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_3,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			54  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_4,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			55  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_4,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			56  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_5,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			57  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_5,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			58  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_6,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			59  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_6,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			60  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_7,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			61  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_7,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			62  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_8,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			63  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_8,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			64  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_9,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			65  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_9,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			66  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_10,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			67  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_10,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			68  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_11,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			69  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_11,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			70  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			71  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			72  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			73  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			74  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_2,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			75  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_2,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			76  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_3,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			77  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_3,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			78  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_4,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			79  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_4,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			80  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_5,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			81  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_5,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			82  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_6,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			83  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_6,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			84  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_7,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			85  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_7,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			86  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_8,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			87  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_8,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			88  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_9,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			89  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_9,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			90  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_10,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			91  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_10,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			92  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_11,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			93  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_11,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			94  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_12,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			95  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_12,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			96  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_13,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			97  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_13,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			98  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_14,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			99  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_14,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			100 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_15,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			101 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_15,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			102 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_16,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			103 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_16,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			104 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_17,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			105 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::ARRAY_SUBSET_17,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			106 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::createClassFixture(),
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			107 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::createClassFixture(),
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			108 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			109 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_INTERFACE_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			110 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::NULL,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			111 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::NULL,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			112 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::NULL_STRING,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			113 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::NULL_STRING,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			114 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			115 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			116 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			117 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			118 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			119 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			120 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			121 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			122 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_STRING_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			123 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_STRING_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			124 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_STRING_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			125 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_STRING_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			126 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			127 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			128 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			129 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			130 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			131 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			132 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			133 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			134 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_STRING_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			135 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_STRING_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			136 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_STRING_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			137 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTEGER_STRING_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			138 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::FLOAT,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			139 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::FLOAT,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			140 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::FLOAT_STRING,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			141 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::FLOAT_STRING,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			142 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::STRING_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			143 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::STRING_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			144 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::STRING_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			145 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::STRING_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			146 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTERFACE_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			147 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::INTERFACE_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			148 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			149 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::UNKNOWN_INTERFACE_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			150 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::CLASS_NAME_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			151 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::CLASS_NAME_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			152 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			153 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			154 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::UNKNOWN_CLASS_NAME,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			155 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::UNKNOWN_CLASS_NAME,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			156 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			157 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			158 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			159 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			160 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_2,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			161 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_2,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			162 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_3,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			163 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_3,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			164 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_4,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			165 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_4,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			166 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_5,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			167 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_5,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			168 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_6,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			169 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_6,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			170 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_7,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			171 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_7,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			172 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_8,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			173 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_8,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			174 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_9,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			175 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_9,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			176 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_10,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			177 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_10,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			178 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_11,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			179 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_11,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			180 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_0,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			181 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_0,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			182 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_1,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			183 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_1,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			184 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_2,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			185 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_2,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			186 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_3,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			187 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_3,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			188 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_4,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			189 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_4,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			190 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_5,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			191 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_5,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			192 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_6,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			193 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_6,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			194 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_7,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			195 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_7,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			196 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_8,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			197 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_8,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			198 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_9,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			199 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_9,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			200 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_10,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			201 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_10,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			202 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_11,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			203 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_11,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			204 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_12,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			205 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_12,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			206 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_13,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			207 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_13,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			208 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_14,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			209 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_14,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			210 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_15,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			211 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_15,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			212 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_16,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			213 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_16,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			214 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_17,
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			215 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::ARRAY_SUBSET_17,
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			216 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::createClassFixture(),
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			217 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::createClassFixture(),
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			218 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_0,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			],
			219 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => $expectedInterfaceOrClassName = Values::UNKNOWN_CLASS_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_1,
				'expectedThrowableClassName'   => UnknownClassOrInterfaceException::class,
				'expectedThrowableMessage'     => sprintf( ExceptionMessages::UNKNOWN_INTERFACE_OR_CLASS_NAME, $expectedInterfaceOrClassName ),
				'expectedThrowableCode'        => 0,
				'expectedPreviousThrowable'    => null
			]
		];
	}
}
