<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

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
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_18, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			35  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_18, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			36  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_19, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			37  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_19, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			38  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_20, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			39  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_20, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			40  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			41  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			42  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			43  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			44  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			45  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			46  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			47  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			48  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			49  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			50  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			51  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			52  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			53  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			54  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			55  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			56  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			57  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			58  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			59  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			60  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			61  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			62  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			63  => [
				'constraint'                   => new ArrayContainsKeyedSubsetConstraint( $arraySubset = Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsKeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			64  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			65  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			66  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			67  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			68  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			69  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			70  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			71  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			72  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			73  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			74  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			75  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			76  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			77  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			78  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			79  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			80  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			81  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			82  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			83  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			84  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			85  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			86  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			87  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			88  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			89  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			90  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			91  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			92  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			93  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			94  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			95  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			96  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			97  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			98  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_18, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			99  => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_18, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			100 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_19, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			101 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_19, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			102 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_20, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			103 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::ARRAY_SUBSET_20, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			104 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			105 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			106 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			107 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			108 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			109 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			110 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			111 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			112 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			113 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			114 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			115 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			116 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			117 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			118 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			119 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			120 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			121 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			122 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			123 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			124 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			125 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			126 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			127 => [
				'constraint'                   => new ArrayContainsUnkeyedSubsetConstraint( $arraySubset = Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					ArrayContainsUnkeyedSubsetConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $arraySubset, true )
				)
			],
			128 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			129 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			130 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			131 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			132 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			133 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			134 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			135 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			136 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			137 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			138 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			139 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			140 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			141 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			142 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			143 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			144 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			145 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			146 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			147 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			148 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			149 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			150 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			151 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			152 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			153 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			154 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			155 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			156 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			157 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			158 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			159 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			160 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			161 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			162 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			163 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			164 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_13, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			165 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::ARRAY_13, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			166 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			167 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			168 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			169 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			170 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			171 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			172 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			173 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			174 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			175 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			176 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			177 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			178 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			179 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			180 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			181 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			182 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			183 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			184 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			185 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			186 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			187 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			188 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			189 => [
				'constraint'                   => new IsKeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsKeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			190 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassFqcn = Values::INTERFACE_FQCN_0 ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::INTERFACE_KIND, $interfaceOrClassFqcn
				)
			],
			191 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassFqcn = Values::CLASS_FQCN_0 ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::CLASS_KIND, $interfaceOrClassFqcn
				)
			],
			192 => [
				'constraint'                   => new IsSubClassOfConstraint( $interfaceOrClassFqcn = Values::CLASS_FQCN_1 ),
				'expectedStringRepresentation' => sprintf(
					IsSubClassOfConstraint::STRING_REPRESENTATION_TEMPLATE,
					TypeKinds::CLASS_KIND, $interfaceOrClassFqcn
				)
			],
			193 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			194 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			195 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			196 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			197 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			198 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			199 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			200 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			201 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			202 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			203 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			204 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			205 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			206 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			207 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			208 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			209 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			210 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			211 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			212 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			213 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			214 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			215 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			216 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			217 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			218 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			219 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			220 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			221 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			222 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			223 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			224 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			225 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			226 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			227 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_12, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			228 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_12, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			229 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_13, Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			230 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::ARRAY_13, Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			231 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			232 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			233 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			234 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			235 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			236 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			237 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			238 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			239 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			240 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			241 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			242 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			243 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			244 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			245 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			246 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			247 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			248 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			249 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			250 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			251 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			252 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			253 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			],
			254 => [
				'constraint'                   => new IsUnkeyedSubsetOfArrayConstraint( $array = Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'expectedStringRepresentation' => sprintf(
					IsUnkeyedSubsetOfArrayConstraint::STRING_REPRESENTATION_TEMPLATE,
					var_export( $array, true )
				)
			]
		];
	}
}
