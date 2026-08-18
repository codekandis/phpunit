<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\AbstractArrayContainsSubsetConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint FQCNs with subset and strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassFqcnsWithSubsetAndStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9   => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			60  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			61  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			62  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			63  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			64  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_FALSE
			],
			65  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_TRUE
			],
			66  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_FALSE
			],
			67  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_TRUE
			],
			68  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_FALSE
			],
			69  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_TRUE
			],
			70  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_14(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			71  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_14(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			72  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_15(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			73  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_15(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			74  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_21(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			75  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_21(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			76  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_22(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			77  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_22(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			78  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_23(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			79  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_23(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			80  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_24(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			81  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_24(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			82  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_25(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			83  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_25(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			84  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_16(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			85  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_16(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			86  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_17(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			87  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArray_17(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			88  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_26(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			89  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_26(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			90  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_27(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			91  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_27(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			92  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_28(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			93  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_28(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			94  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			95  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			96  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			97  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			98  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			99  => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			100 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			101 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			102 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			103 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			104 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			105 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			106 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			107 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			108 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			109 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			110 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			111 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			112 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			113 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			114 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			115 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			116 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			117 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			118 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			119 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			120 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			121 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			122 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			123 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			124 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			125 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			126 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			127 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			128 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			129 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			130 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			131 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			132 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			133 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			134 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			135 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			136 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			137 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			138 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			139 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			140 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			141 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			142 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			143 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			144 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			145 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			146 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			147 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			148 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			149 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			150 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			151 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			152 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			153 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			154 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			155 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			156 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			157 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			158 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_FALSE
			],
			159 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_TRUE
			],
			160 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_FALSE
			],
			161 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_TRUE
			],
			162 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_FALSE
			],
			163 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_TRUE
			],
			164 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_14(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			165 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_14(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			166 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_15(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			167 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_15(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			168 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_21(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			169 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_21(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			170 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_22(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			171 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_22(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			172 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_23(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			173 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_23(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			174 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_24(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			175 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_24(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			176 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_25(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			177 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_25(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			178 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_16(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			179 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_16(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			180 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_17(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			181 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArray_17(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			182 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_26(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			183 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_26(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			184 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_27(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			185 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_27(),
				'strict'              => Values::BOOLEAN_TRUE
			],
			186 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_28(),
				'strict'              => Values::BOOLEAN_FALSE
			],
			187 => [
				'constraintClassFqcn' => ArrayContainsUnkeyedSubsetConstraint::class,
				'subset'              => Values::createArraySubset_28(),
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
