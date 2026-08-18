<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ArrayContainsKeyedSubsetConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
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
			0  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9  => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			60 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			61 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			62 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			63 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			],
			64 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_FALSE
			],
			65 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_18,
				'strict'              => Values::BOOLEAN_TRUE
			],
			66 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_FALSE
			],
			67 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_19,
				'strict'              => Values::BOOLEAN_TRUE
			],
			68 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_FALSE
			],
			69 => [
				'constraintClassFqcn' => ArrayContainsKeyedSubsetConstraint::class,
				'subset'              => Values::ARRAY_SUBSET_20,
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
