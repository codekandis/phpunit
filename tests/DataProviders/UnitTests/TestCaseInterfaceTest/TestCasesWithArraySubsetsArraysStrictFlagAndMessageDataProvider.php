<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing test cases with array subsets, arrays, strict flag and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithArraySubsetsArraysStrictFlagAndMessageDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			1   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			2   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			3   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			4   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			5   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			6   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			7   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			8   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			9   => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			10  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			11  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			12  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			13  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			14  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			15  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			16  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			17  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			18  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			19  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			20  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			21  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			22  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			23  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			24  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			25  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			26  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			27  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			28  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			29  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			30  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			31  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			32  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			33  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			34  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			35  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			36  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			37  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			38  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			39  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			40  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			41  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			42  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			43  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			44  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			45  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			46  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			47  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			48  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			49  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			50  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			51  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			52  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			53  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			54  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			55  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			56  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			57  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			58  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			59  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			60  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			61  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			62  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			63  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			64  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			65  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			66  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			67  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			68  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			69  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			70  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			71  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			72  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			73  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			74  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			75  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			76  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			77  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			78  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			79  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			80  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			81  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			82  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			83  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			84  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			85  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			86  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			87  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			88  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			89  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			90  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			91  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			92  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			93  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			94  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			95  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			96  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			97  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			98  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			99  => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			100 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			101 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			102 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			103 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			104 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			105 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			106 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			107 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			108 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			109 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			110 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			111 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			112 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			113 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			114 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			115 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			116 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			117 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			118 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			119 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			120 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_1,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			121 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_1,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			122 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_1,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			123 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_1,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			124 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_2,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			125 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_2,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			126 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_2,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			127 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_2,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			128 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			129 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			130 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			131 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			132 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			133 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			134 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			135 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			136 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			137 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			138 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			139 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			140 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			141 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			142 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			143 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_3,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			144 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			145 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			146 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			147 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			148 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			149 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			150 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			151 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_4,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			152 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_5,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			153 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_5,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			154 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_5,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			155 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_5,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			156 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			157 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			158 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			159 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			160 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			161 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			162 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			163 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			164 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			165 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			166 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			167 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			168 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			169 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			170 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			171 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			172 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			173 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			174 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			175 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_6,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			176 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_7,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			177 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_7,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			178 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_7,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			179 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_7,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			180 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			181 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			182 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			183 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			184 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			185 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			186 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			187 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_8,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			188 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			189 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			190 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			191 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			192 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			193 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			194 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			195 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			196 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			197 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			198 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			199 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_9,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			200 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_10,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			201 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_10,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			202 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_10,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			203 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_10,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			204 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			205 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			206 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			207 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			208 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			209 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			210 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			211 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			212 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			213 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			214 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			215 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			216 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			217 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			218 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			219 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			220 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			221 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			222 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			223 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			224 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			225 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			226 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			227 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			228 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			229 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			230 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			231 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			232 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			233 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			234 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			235 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			236 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			237 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			238 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			239 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			240 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			241 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			242 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			243 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			244 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			245 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			246 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			247 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			248 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			249 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			250 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			251 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			252 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			253 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			254 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			255 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			256 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			257 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			258 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			259 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_0,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			260 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			261 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			262 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			263 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			264 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			265 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			266 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			267 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			268 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			269 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			270 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			271 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			272 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			273 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			274 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			275 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			276 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			277 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			278 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			279 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			280 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			281 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			282 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			283 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			284 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			285 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			286 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			287 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			288 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			289 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			290 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			291 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			292 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			293 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			294 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			295 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			296 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			297 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			298 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			299 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			300 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			301 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			302 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			303 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			304 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			305 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			306 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			307 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			308 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			309 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			310 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			311 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			312 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			313 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			314 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			315 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			316 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			317 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			318 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			319 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			320 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			321 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			322 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			323 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			324 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			325 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			326 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			327 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_0,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			328 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			329 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			330 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			331 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			332 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			333 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			334 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			335 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			336 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			337 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			338 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			339 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_1,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			340 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			341 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			342 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			343 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_1,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			344 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			345 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			346 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			347 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			348 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			349 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			350 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			351 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_2,
				'actualArray'    => Values::ARRAY_SUBSET_2,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			352 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			353 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			354 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			355 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			356 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			357 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			358 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			359 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			360 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			361 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			362 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			363 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_3,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			364 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			365 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			366 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			367 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			368 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			369 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			370 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			371 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_3,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			372 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_4,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			373 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_4,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			374 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_4,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			375 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_4,
				'actualArray'    => Values::ARRAY_SUBSET_4,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			376 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			377 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			378 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			379 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			380 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			381 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			382 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			383 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_5,
				'actualArray'    => Values::ARRAY_SUBSET_5,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			384 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			385 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			386 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			387 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			388 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			389 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			390 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			391 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			392 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			393 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			394 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			395 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			396 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			397 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			398 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			399 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_6,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			400 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			401 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			402 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			403 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_6,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			404 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			405 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			406 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			407 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			408 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			409 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			410 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			411 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			412 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			413 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_7,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			414 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			415 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_7,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			416 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			417 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			418 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			419 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_8,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			420 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			421 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			422 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			423 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_8,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			424 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			425 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			426 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			427 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			428 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			429 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			430 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			431 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_9,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			432 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			433 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			434 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			435 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_9,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			436 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_10,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			437 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_10,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			438 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_10,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			439 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_10,
				'actualArray'    => Values::ARRAY_SUBSET_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			440 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			441 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			442 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			443 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			444 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			445 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			446 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			447 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_11,
				'actualArray'    => Values::ARRAY_SUBSET_11,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			448 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_12,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			449 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_12,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			450 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_12,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			451 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_12,
				'actualArray'    => Values::ARRAY_SUBSET_12,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			452 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_13,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			453 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_13,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			454 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_13,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			455 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_13,
				'actualArray'    => Values::ARRAY_SUBSET_13,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			456 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_14,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			457 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_14,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			458 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_14,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			459 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_14,
				'actualArray'    => Values::ARRAY_SUBSET_14,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			460 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			461 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			462 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			463 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			464 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			465 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			466 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			467 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_15,
				'actualArray'    => Values::ARRAY_SUBSET_15,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			468 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			469 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			470 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			471 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_10,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			472 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			473 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			474 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			475 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_16,
				'actualArray'    => Values::ARRAY_SUBSET_16,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			],
			476 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_17,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_0
			],
			477 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_17,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_FALSE,
				'message'        => Values::STRING_1
			],
			478 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_17,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_0
			],
			479 => [
				'testCase'       => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedSubset' => Values::ARRAY_SUBSET_17,
				'actualArray'    => Values::ARRAY_SUBSET_17,
				'strict'         => Values::BOOLEAN_TRUE,
				'message'        => Values::STRING_1
			]
		];
	}
}
