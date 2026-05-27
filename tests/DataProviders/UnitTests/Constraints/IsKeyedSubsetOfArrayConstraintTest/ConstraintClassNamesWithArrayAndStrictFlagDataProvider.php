<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\IsKeyedSubsetOfArrayConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraint class names with array and strict flag.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintClassNamesWithArrayAndStrictFlagDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			1  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			2  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			3  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			4  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			5  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			6  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			7  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			8  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			9  => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			10 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			11 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			12 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			13 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			14 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			15 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			16 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			17 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			18 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			19 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			20 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			21 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			22 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			23 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			24 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_FALSE
			],
			25 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_0,
				'strict'              => Values::BOOLEAN_TRUE
			],
			26 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_FALSE
			],
			27 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_1,
				'strict'              => Values::BOOLEAN_TRUE
			],
			28 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_FALSE
			],
			29 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_2,
				'strict'              => Values::BOOLEAN_TRUE
			],
			30 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_FALSE
			],
			31 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_3,
				'strict'              => Values::BOOLEAN_TRUE
			],
			32 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_FALSE
			],
			33 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_4,
				'strict'              => Values::BOOLEAN_TRUE
			],
			34 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_FALSE
			],
			35 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_5,
				'strict'              => Values::BOOLEAN_TRUE
			],
			36 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_FALSE
			],
			37 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_6,
				'strict'              => Values::BOOLEAN_TRUE
			],
			38 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_FALSE
			],
			39 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_7,
				'strict'              => Values::BOOLEAN_TRUE
			],
			40 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_FALSE
			],
			41 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_8,
				'strict'              => Values::BOOLEAN_TRUE
			],
			42 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_FALSE
			],
			43 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_9,
				'strict'              => Values::BOOLEAN_TRUE
			],
			44 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_FALSE
			],
			45 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_10,
				'strict'              => Values::BOOLEAN_TRUE
			],
			46 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_FALSE
			],
			47 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_11,
				'strict'              => Values::BOOLEAN_TRUE
			],
			48 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_FALSE
			],
			49 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_12,
				'strict'              => Values::BOOLEAN_TRUE
			],
			50 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_FALSE
			],
			51 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_13,
				'strict'              => Values::BOOLEAN_TRUE
			],
			52 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_FALSE
			],
			53 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_14,
				'strict'              => Values::BOOLEAN_TRUE
			],
			54 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_FALSE
			],
			55 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_15,
				'strict'              => Values::BOOLEAN_TRUE
			],
			56 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_FALSE
			],
			57 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_16,
				'strict'              => Values::BOOLEAN_TRUE
			],
			58 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_FALSE
			],
			59 => [
				'constraintClassName' => IsKeyedSubsetOfArrayConstraint::class,
				'array'               => Values::ARRAY_SUBSET_17,
				'strict'              => Values::BOOLEAN_TRUE
			]
		];
	}
}
