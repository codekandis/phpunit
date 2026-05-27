<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing test cases with interface or class name, actual value and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithInterfaceOrClassNameActualAndMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => Values::INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_0
			],
			1 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => Values::INTERFACE_NAME,
				'actual'                       => Values::CLASS_NAME_1,
				'message'                      => Values::STRING_1
			],
			2 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => Values::INTERFACE_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_0
			],
			3 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassName' => Values::INTERFACE_NAME,
				'actual'                       => Values::createImplementingClassFixture(),
				'message'                      => Values::STRING_1
			]
		];
	}
}
