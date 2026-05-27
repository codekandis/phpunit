<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\TypeKinds;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with expected string representation.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithExpectedStringRepresentationDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			1   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			2   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			3   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			4   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			5   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			6   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			7   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			8   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			9   => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			10  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			11  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			12  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			13  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			14  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			15  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			16  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			17  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			18  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			19  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			20  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			21  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			22  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			23  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			24  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			25  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			26  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			27  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			28  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			29  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			30  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			31  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			32  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			33  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			34  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			35  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			36  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			37  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			38  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			39  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			40  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			41  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			42  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			43  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			44  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			45  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			46  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			47  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			48  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			49  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			50  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			51  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			52  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			53  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			54  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			55  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			56  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			57  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			58  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			59  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			60  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			61  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			62  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			63  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			64  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			65  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			66  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			67  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			68  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			69  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			70  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			71  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			72  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			73  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			74  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			75  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			76  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			77  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			78  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			79  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			80  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			81  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			82  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			83  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			84  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			85  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			86  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			87  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			88  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			89  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			90  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			91  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			92  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			93  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			94  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			95  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			96  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			97  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			98  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			99  => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			100 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			101 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			102 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			103 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			104 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			105 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			106 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			107 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			108 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			109 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			110 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			111 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			112 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			113 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			114 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			115 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			116 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			117 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			118 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			119 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			120 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			121 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			122 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			123 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			124 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			125 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			126 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			127 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			128 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			129 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			130 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			131 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			132 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			133 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			134 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			135 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			136 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassName = Values::INTERFACE_NAME ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::INTERFACE_KIND,
					$interfaceOrClassName
				)
			],
			137 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassName = Values::CLASS_NAME_0 ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::CLASS_KIND,
					$interfaceOrClassName
				)
			],
			138 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassName = Values::CLASS_NAME_1 ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::CLASS_KIND,
					$interfaceOrClassName
				)
			]
		];
	}
}
