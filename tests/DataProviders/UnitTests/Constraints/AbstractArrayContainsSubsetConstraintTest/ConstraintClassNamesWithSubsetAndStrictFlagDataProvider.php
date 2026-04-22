<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\AbstractArrayContainsSubsetConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint class names with subset and strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassNamesWithSubsetAndStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9   => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59  => [
				'constraintClassName' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			60  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			61  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			62  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			63  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			64  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			65  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			66  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			67  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			68  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			69  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			70  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			71  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			72  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			73  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			74  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			75  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			76  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			77  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			78  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			79  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			80  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			81  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			82  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			83  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			84  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			85  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			86  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			87  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			88  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			89  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			90  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			91  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			92  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			93  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			94  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			95  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			96  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			97  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			98  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			99  => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			100 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			101 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			102 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			103 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			104 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			105 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			106 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			107 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			108 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			109 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			110 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			111 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			112 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			113 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			114 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			115 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			116 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			117 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			118 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			119 => [
				'constraintClassName' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
