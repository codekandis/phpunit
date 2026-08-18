<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\AbstractIsSubsetOfArrayConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint FQCNs with array and strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassFqcnsWithArrayAndStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9   => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			60  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			61  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			62  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			63  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			64  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_FALSE
			],
			65  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_TRUE
			],
			66  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_FALSE
			],
			67  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_TRUE
			],
			68  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_FALSE
			],
			69  => [
				'constraintClassFqcn' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_TRUE
			],
			70  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			71  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			72  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			73  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			74  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			75  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			76  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			77  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			78  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			79  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			80  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			81  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			82  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			83  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			84  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			85  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			86  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			87  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			88  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			89  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			90  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			91  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			92  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			93  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			94  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			95  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			96  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			97  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			98  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			99  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			100 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			101 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			102 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			103 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			104 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			105 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			106 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			107 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			108 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			109 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			110 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			111 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			112 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			113 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			114 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			115 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			116 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			117 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			118 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			119 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			120 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			121 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			122 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			123 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			124 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			125 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			126 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			127 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			128 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			129 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			130 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			131 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			132 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			133 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			134 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_FALSE
			],
			135 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_TRUE
			],
			136 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_FALSE
			],
			137 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_TRUE
			],
			138 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_FALSE
			],
			139 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
