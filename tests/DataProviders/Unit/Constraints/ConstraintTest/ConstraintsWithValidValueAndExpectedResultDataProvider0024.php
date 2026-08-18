<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0024 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			24000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24365 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24366 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24367 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24368 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24369 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24370 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24371 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24372 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24373 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_23(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24422 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24423 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24424 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24425 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24426 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24427 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24428 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24429 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24430 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24431 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24432 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24433 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24434 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24435 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24436 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24437 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24438 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24439 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24440 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24441 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24442 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24443 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24444 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24445 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24446 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24447 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24448 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24449 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24450 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24451 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24452 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24453 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24454 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24455 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24456 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24457 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24458 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24459 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24460 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24461 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24462 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24463 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24464 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24465 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24466 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24467 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24468 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24469 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24470 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24471 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24472 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24473 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24474 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24475 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24476 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24477 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24478 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24479 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24480 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24481 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24482 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24483 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24484 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24485 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24486 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24487 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24488 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24489 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24490 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24491 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24492 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24493 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24494 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24495 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24496 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24497 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24498 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24499 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24500 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24501 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24502 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24503 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24504 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24505 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24506 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24507 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24508 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24509 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24510 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24511 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24512 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24513 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24514 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24515 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24516 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24517 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24518 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24519 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24520 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24521 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24522 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24523 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24524 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24525 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24526 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24527 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24528 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24529 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24530 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24531 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24532 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24533 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24534 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24535 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24536 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24537 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24538 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24539 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24540 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24541 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24542 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24543 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24544 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24545 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24546 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24547 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24548 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24549 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24550 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24551 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24552 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24553 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24554 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24555 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24556 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24557 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_24(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24558 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24559 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24560 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24561 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24562 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24563 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24564 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24565 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24566 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24567 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24568 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24569 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24570 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24571 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24572 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24573 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24574 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24575 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24576 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24577 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24578 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24579 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24580 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24581 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24582 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24583 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24584 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24585 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24586 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24587 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24588 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24589 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24590 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24591 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24592 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24593 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24594 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24595 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24596 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24597 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24598 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24599 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24600 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24601 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24602 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24603 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24604 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24605 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24606 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24607 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24608 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24609 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24610 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24611 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24612 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24613 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24614 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24615 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24616 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24617 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24618 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24619 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24620 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24621 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24622 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24623 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24624 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24625 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24626 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24627 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24628 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24629 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24630 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24631 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24632 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24633 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24634 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24635 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24636 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24637 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24638 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24639 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24640 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24641 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24642 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24643 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24644 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24645 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24646 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24647 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24648 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24649 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24650 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24651 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24652 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24653 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24654 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24655 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24656 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24657 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24658 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24659 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24660 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24661 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24662 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24663 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24664 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24665 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24666 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24667 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24668 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24669 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24670 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24671 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24672 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24673 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24674 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24675 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24676 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24677 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24678 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24679 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24680 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24681 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24682 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24683 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24684 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24685 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24686 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24687 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24688 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24689 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24690 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24691 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24692 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24693 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24694 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24695 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24696 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24697 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24698 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24699 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24700 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24701 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_25(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24702 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24703 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24704 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24705 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24706 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24707 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24708 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24709 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24710 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24711 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24712 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24713 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24714 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24715 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24716 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24717 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24718 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24719 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24720 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24721 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24722 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24723 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24724 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24725 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24726 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24727 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24728 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24729 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24730 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24731 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24732 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24733 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24734 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24735 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24736 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24737 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24738 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24739 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24740 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24741 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24742 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24743 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24744 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24745 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24746 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24747 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24748 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24749 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24750 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24751 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24752 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24753 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24754 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24755 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24756 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24757 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24758 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24759 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24760 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24761 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24762 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24763 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24764 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24765 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24766 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24767 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24768 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24769 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24770 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24771 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24772 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24773 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24774 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24775 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24776 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24777 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24778 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24779 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24780 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24781 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24782 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24783 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24784 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24785 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24786 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24787 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24788 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24789 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24790 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24791 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24792 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24793 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24794 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24795 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24796 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24797 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24798 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24799 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24800 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24801 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24802 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24803 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24804 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24805 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24806 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24807 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24808 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24809 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24810 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24811 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24812 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24813 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24814 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24815 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24816 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24817 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24818 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24819 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24820 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24821 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24822 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24823 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24824 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24825 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24826 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24827 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24828 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24829 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24830 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24831 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24832 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24833 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24834 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24835 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24836 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24837 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24838 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24839 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24840 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24841 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24842 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24843 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24844 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24845 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_16(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24846 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24847 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24848 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24849 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24850 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24851 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24852 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24853 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24854 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24855 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24856 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24857 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24858 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24859 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24860 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24861 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24862 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24863 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24864 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24865 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24866 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24867 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24868 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24869 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24870 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24871 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24872 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24873 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24874 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24875 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24876 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24877 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24878 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24879 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24880 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24881 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24882 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24883 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24884 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24885 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24886 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24887 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24888 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24889 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24890 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24891 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24892 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24893 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24894 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24895 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24896 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24897 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24898 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24899 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24900 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24901 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24902 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24903 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24904 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24905 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24906 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24907 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24908 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24909 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24910 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24911 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24912 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24913 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24914 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24915 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24916 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24917 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24918 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24919 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24920 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24921 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24922 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24923 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24924 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24925 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24926 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24927 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24928 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24929 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24930 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24931 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24932 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24933 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24934 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24935 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24936 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24937 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24938 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24939 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24940 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24941 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24942 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24943 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24944 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24945 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24946 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24947 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24948 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24949 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24950 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24951 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24952 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24953 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24954 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24955 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24956 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24957 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24958 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24959 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24960 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24961 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24962 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24963 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24964 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24965 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24966 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24967 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24968 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24969 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24970 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24971 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24972 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24973 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24974 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24975 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24976 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24977 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24978 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24979 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24980 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24981 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24982 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24983 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24984 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24985 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24986 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24987 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24988 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			24989 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArray_17(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24990 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24991 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24992 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24993 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24994 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24995 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24996 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24997 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24998 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			24999 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
