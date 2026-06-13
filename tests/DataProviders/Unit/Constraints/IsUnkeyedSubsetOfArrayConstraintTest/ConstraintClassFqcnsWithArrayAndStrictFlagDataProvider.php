<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\IsUnkeyedSubsetOfArrayConstraintTest;

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
			0  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9  => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59 => [
				'constraintClassFqcn' => IsUnkeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
