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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0025 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			25000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_26(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_27(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25365 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25366 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25367 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25368 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25369 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25370 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25371 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25372 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25373 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			25386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			25421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
