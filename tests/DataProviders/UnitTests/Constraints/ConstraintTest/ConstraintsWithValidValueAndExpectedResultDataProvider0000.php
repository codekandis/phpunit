<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0000 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			2   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			5   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			6   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			7   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			8   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9   => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			11  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			12  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			13  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			14  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			15  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			16  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			17  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			21  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			23  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			26  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			27  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			28  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			29  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			30  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			31  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			32  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			33  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			34  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			35  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			36  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			37  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			38  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			39  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			40  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			41  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			42  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			43  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			44  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			45  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			46  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			47  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			48  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			49  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			50  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			51  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			52  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			53  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			54  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			55  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			56  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			57  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			58  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			59  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			60  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			61  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			62  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			63  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			64  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			65  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			66  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			67  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			68  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			69  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			70  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			71  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			72  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			73  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			74  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			75  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			76  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			77  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			78  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			79  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			80  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			81  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			82  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			83  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			84  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			85  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			86  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			87  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			88  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			89  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			90  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			91  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			92  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			93  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			94  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			95  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			96  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			97  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			98  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			99  => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			100 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			101 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			102 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			103 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			104 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			105 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			106 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			107 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			108 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			109 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			110 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			111 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			112 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			113 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			114 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			115 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			116 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			117 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			118 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			119 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			120 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			121 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			122 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			123 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			124 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			125 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			126 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			127 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			128 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			129 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			130 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			131 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			132 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			133 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			134 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			135 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			136 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			137 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			138 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			139 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			140 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			141 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			142 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			143 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			144 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			145 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			146 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			147 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			148 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			149 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			150 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			151 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			152 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			153 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			154 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			155 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			156 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			157 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			158 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			159 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			160 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			161 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			162 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			163 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			164 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			165 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			166 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			167 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			168 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			169 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			170 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			171 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			172 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			173 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			174 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			175 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			176 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			177 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			178 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			179 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			180 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			181 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			182 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			183 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			184 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			185 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			186 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			187 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			188 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			189 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			190 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			191 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			192 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			193 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			194 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			195 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			196 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			197 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			198 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			199 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			200 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			201 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			202 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			203 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			204 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			205 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			206 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			207 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			208 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			209 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			210 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			211 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			212 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			213 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			214 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			215 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			216 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			217 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			218 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			219 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			220 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			221 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			222 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			223 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			224 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			225 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			226 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			227 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			228 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			229 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			230 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			231 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			232 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			233 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			234 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			235 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			236 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			237 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			238 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			239 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			240 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			241 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			242 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			243 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			244 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			245 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			246 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			247 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			248 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			249 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			250 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			251 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			252 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			253 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			254 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			255 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			256 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			257 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			258 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			259 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			260 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			261 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			262 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			263 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			264 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			265 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			266 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			267 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			268 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			269 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			270 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			271 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			272 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			273 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			274 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			275 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			276 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			277 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			278 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			279 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			280 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			281 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			282 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			283 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			284 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			285 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			286 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			287 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			288 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			289 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			290 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			291 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			292 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			293 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			294 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			295 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			296 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			297 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			298 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			299 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			300 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			301 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			302 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			303 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			304 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			305 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			306 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			307 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			308 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			309 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			310 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			311 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			312 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			313 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			314 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			315 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			316 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			317 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			318 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			319 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			320 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			321 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			322 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			323 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			324 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			325 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			326 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			327 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			328 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			329 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			330 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			331 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			332 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			333 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			334 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			335 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			336 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			337 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			338 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			339 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			340 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			341 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			342 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			343 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			344 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			345 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			346 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			347 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			348 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			349 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			350 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			351 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			352 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			353 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			354 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			355 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			356 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			357 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			358 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			359 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			360 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			361 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			362 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			363 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			364 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			365 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			366 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			367 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			368 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			369 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			370 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			371 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			372 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			373 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			374 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			375 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			376 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			377 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			378 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			379 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			380 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			381 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			382 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			383 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			384 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			385 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			386 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			387 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			388 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			389 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			390 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			391 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			392 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			393 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			394 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			395 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			396 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			397 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			398 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			399 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			400 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			401 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			402 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			403 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			404 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			405 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			406 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			407 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			408 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			409 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			410 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			411 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			412 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			413 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			414 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			415 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			416 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			417 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			418 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			419 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			420 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			421 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			422 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			423 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			424 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			425 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			426 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			427 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			428 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			429 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			430 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			431 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			432 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			433 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			434 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			435 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			436 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			437 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			438 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			439 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			440 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			441 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			442 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			443 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			444 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			445 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			446 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			447 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			448 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			449 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			450 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			451 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			452 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			453 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			454 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			455 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			456 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			457 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			458 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			459 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			460 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			461 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			462 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			463 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			464 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			465 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			466 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			467 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			468 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			469 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			470 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			471 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			472 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			473 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			474 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			475 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			476 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			477 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			478 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			479 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			480 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			481 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			482 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			483 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			484 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			485 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			486 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			487 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			488 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			489 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			490 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			491 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			492 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			493 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			494 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			495 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			496 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			497 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			498 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			499 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			500 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			501 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			502 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			503 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			504 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			505 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			506 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			507 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			508 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			509 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			510 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			511 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			512 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			513 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			514 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			515 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			516 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			517 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			518 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			519 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			520 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			521 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			522 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			523 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			524 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			525 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			526 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			527 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			528 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			529 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			530 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			531 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			532 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			533 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			534 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			535 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			536 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			537 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			538 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			539 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			540 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			541 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			542 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			543 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			544 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			545 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			546 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			547 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			548 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			549 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			550 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			551 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			552 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			553 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			554 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			555 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			556 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			557 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			558 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			559 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			560 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			561 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			562 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			563 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			564 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			565 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			566 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			567 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			568 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			569 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			570 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			571 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			572 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			573 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			574 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			575 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			576 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			577 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			578 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			579 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			580 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			581 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			582 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			583 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			584 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			585 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			586 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			587 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			588 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			589 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			590 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			591 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			592 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			593 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			594 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			595 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			596 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			597 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			598 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			599 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			600 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			601 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			602 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			603 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			604 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			605 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			606 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			607 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			608 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			609 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			610 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			611 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			612 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			613 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			614 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			615 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			616 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			617 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			618 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			619 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			620 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			621 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			622 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			623 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			624 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			625 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			626 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			627 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			628 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			629 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			630 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			631 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			632 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			633 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			634 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			635 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			636 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			637 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			638 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			639 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			640 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			641 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			642 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			643 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			644 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			645 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			646 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			647 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			648 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			649 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			650 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			651 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			652 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			653 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			654 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			655 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			656 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			657 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			658 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			659 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			660 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			661 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			662 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			663 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			664 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			665 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			666 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			667 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			668 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			669 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			670 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			671 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			672 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			673 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			674 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			675 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			676 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			677 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			678 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			679 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			680 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			681 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			682 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			683 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			684 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			685 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			686 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			687 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			688 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			689 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			690 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			691 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			692 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			693 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			694 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			695 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			696 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			697 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			698 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			699 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			700 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			701 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			702 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			703 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			704 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			705 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			706 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			707 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			708 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			709 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			710 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			711 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			712 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			713 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			714 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			715 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			716 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			717 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			718 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			719 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			720 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			721 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			722 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			723 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			724 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			725 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			726 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			727 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			728 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			729 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			730 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			731 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			732 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			733 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			734 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			735 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			736 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			737 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			738 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			739 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			740 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			741 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			742 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			743 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			744 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			745 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			746 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			747 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			748 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			749 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			750 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			751 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			752 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			753 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			754 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			755 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			756 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			757 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			758 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			759 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			760 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			761 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			762 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			763 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			764 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			765 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			766 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			767 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			768 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			769 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			770 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			771 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			772 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			773 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			774 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			775 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			776 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			777 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			778 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			779 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			780 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			781 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			782 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			783 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			784 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			785 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			786 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			787 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			788 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			789 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			790 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			791 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			792 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			793 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			794 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			795 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			796 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			797 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			798 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			799 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			800 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			801 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			802 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			803 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			804 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			805 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			806 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			807 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			808 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			809 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			810 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			811 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			812 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			813 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			814 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			815 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			816 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			817 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			818 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			819 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			820 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			821 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			822 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			823 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			824 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			825 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			826 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			827 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			828 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			829 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			830 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			831 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			832 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			833 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			834 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			835 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			836 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			837 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			838 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			839 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			840 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			841 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			842 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			843 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			844 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			845 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			846 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			847 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			848 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			849 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			850 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			851 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			852 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			853 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			854 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			855 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			856 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			857 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			858 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			859 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			860 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			861 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			862 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			863 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			864 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			865 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			866 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			867 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			868 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			869 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			870 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			871 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			872 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			873 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			874 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			875 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			876 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			877 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			878 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			879 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			880 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			881 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			882 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			883 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			884 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			885 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			886 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			887 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			888 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			889 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			890 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			891 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			892 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			893 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			894 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			895 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			896 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			897 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			898 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			899 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			900 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			901 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			902 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			903 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			904 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			905 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			906 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			907 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			908 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			909 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			910 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			911 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			912 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			913 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			914 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			915 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			916 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			917 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			918 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			919 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			920 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			921 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			922 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			923 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			924 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			925 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			926 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			927 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			928 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			929 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			930 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			931 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			932 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			933 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			934 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			935 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			936 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			937 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			938 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			939 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			940 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			941 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			942 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			943 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			944 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			945 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			946 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			947 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			948 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			949 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			950 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			951 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			952 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			953 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			954 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			955 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			956 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			957 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			958 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			959 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			960 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			961 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			962 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			963 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			964 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			965 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			966 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			967 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			968 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			969 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			970 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			971 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			972 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			973 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			974 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			975 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			976 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			977 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			978 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			979 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			980 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			981 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			982 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			983 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			984 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			985 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			986 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			987 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			988 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			989 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			990 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			991 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			992 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			993 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			994 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			995 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			996 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			997 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			998 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			999 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
