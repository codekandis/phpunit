<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing test cases with expected interface or class FQCN, actual and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedInterfaceOrClassFqcnActualAndMessageDataProvider implements DataProviderInterface
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
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::INTERFACE_FQCN_1,
				'message'                      => Values::STRING_0
			],
			1   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::INTERFACE_FQCN_1,
				'message'                      => Values::STRING_1
			],
			2   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_1,
				'message'                      => Values::STRING_0
			],
			3   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_1,
				'message'                      => Values::STRING_1
			],
			4   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_2,
				'message'                      => Values::STRING_0
			],
			5   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_2,
				'message'                      => Values::STRING_1
			],
			6   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_5,
				'message'                      => Values::STRING_0
			],
			7   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_5,
				'message'                      => Values::STRING_1
			],
			8   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_0
			],
			9   => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_1
			],
			10  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_0
			],
			11  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_1
			],
			12  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_0
			],
			13  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_1
			],
			14  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_0
			],
			15  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_1
			],
			16  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_1(),
				'message'                      => Values::STRING_0
			],
			17  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_1(),
				'message'                      => Values::STRING_1
			],
			18  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_2(),
				'message'                      => Values::STRING_0
			],
			19  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_2(),
				'message'                      => Values::STRING_1
			],
			20  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_5(),
				'message'                      => Values::STRING_0
			],
			21  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_5(),
				'message'                      => Values::STRING_1
			],
			22  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_0
			],
			23  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_1
			],
			24  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_0
			],
			25  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_1
			],
			26  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_0
			],
			27  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_1
			],
			28  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_0
			],
			29  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_0,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_1
			],
			30  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_2,
				'message'                      => Values::STRING_0
			],
			31  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_2,
				'message'                      => Values::STRING_1
			],
			32  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_0
			],
			33  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_1
			],
			34  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_0
			],
			35  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_1
			],
			36  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_0
			],
			37  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_1
			],
			38  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_2(),
				'message'                      => Values::STRING_0
			],
			39  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_2(),
				'message'                      => Values::STRING_1
			],
			40  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_0
			],
			41  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_1
			],
			42  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_0
			],
			43  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_1
			],
			44  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_0
			],
			45  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_1,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_1
			],
			46  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_3,
				'message'                      => Values::STRING_0
			],
			47  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_3,
				'message'                      => Values::STRING_1
			],
			48  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_7,
				'message'                      => Values::STRING_0
			],
			49  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_7,
				'message'                      => Values::STRING_1
			],
			50  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_0
			],
			51  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_1
			],
			52  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_0
			],
			53  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_1
			],
			54  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_0
			],
			55  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_1
			],
			56  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_3(),
				'message'                      => Values::STRING_0
			],
			57  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_3(),
				'message'                      => Values::STRING_1
			],
			58  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_7(),
				'message'                      => Values::STRING_0
			],
			59  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_7(),
				'message'                      => Values::STRING_1
			],
			60  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_0
			],
			61  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_1
			],
			62  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_0
			],
			63  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_1
			],
			64  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_0
			],
			65  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::INTERFACE_FQCN_2,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_1
			],
			66  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_4,
				'message'                      => Values::STRING_0
			],
			67  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_4,
				'message'                      => Values::STRING_1
			],
			68  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_5,
				'message'                      => Values::STRING_0
			],
			69  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_5,
				'message'                      => Values::STRING_1
			],
			70  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_0
			],
			71  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_6,
				'message'                      => Values::STRING_1
			],
			72  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_7,
				'message'                      => Values::STRING_0
			],
			73  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_7,
				'message'                      => Values::STRING_1
			],
			74  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_11,
				'message'                      => Values::STRING_0
			],
			75  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::CLASS_FQCN_11,
				'message'                      => Values::STRING_1
			],
			76  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_4(),
				'message'                      => Values::STRING_0
			],
			77  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_4(),
				'message'                      => Values::STRING_1
			],
			78  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_5(),
				'message'                      => Values::STRING_0
			],
			79  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_5(),
				'message'                      => Values::STRING_1
			],
			80  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_0
			],
			81  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_6(),
				'message'                      => Values::STRING_1
			],
			82  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_7(),
				'message'                      => Values::STRING_0
			],
			83  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_7(),
				'message'                      => Values::STRING_1
			],
			84  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_11(),
				'message'                      => Values::STRING_0
			],
			85  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_0,
				'actual'                       => Values::createClassFixture_11(),
				'message'                      => Values::STRING_1
			],
			86  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_0
			],
			87  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_1,
				'actual'                       => Values::CLASS_FQCN_8,
				'message'                      => Values::STRING_1
			],
			88  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_1,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_0
			],
			89  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_1,
				'actual'                       => Values::createClassFixture_8(),
				'message'                      => Values::STRING_1
			],
			90  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_0
			],
			91  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_2,
				'actual'                       => Values::CLASS_FQCN_9,
				'message'                      => Values::STRING_1
			],
			92  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_2,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_0
			],
			93  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_2,
				'actual'                       => Values::createClassFixture_9(),
				'message'                      => Values::STRING_1
			],
			94  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_3,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_0
			],
			95  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_3,
				'actual'                       => Values::CLASS_FQCN_10,
				'message'                      => Values::STRING_1
			],
			96  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_3,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_0
			],
			97  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_3,
				'actual'                       => Values::createClassFixture_10(),
				'message'                      => Values::STRING_1
			],
			98  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_4,
				'actual'                       => Values::CLASS_FQCN_11,
				'message'                      => Values::STRING_0
			],
			99  => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_4,
				'actual'                       => Values::CLASS_FQCN_11,
				'message'                      => Values::STRING_1
			],
			100 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_4,
				'actual'                       => Values::createClassFixture_11(),
				'message'                      => Values::STRING_0
			],
			101 => [
				'testCase'                     => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedInterfaceOrClassFqcn' => Values::CLASS_FQCN_4,
				'actual'                       => Values::createClassFixture_11(),
				'message'                      => Values::STRING_1
			]
		];
	}
}
