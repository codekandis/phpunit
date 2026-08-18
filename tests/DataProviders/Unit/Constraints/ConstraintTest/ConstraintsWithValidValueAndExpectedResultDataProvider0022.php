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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0022 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			22000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22365 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22366 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22367 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22368 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22369 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22370 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22371 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22372 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22373 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22422 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22423 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22424 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22425 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22426 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22427 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22428 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22429 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22430 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22431 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22432 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22433 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22434 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22435 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22436 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22437 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22438 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22439 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22440 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22441 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22442 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22443 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22444 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22445 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22446 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22447 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22448 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22449 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22450 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22451 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22452 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22453 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22454 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22455 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22456 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22457 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22458 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22459 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22460 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22461 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22462 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22463 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22464 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22465 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22466 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22467 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22468 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22469 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22470 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22471 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22472 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22473 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22474 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22475 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22476 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22477 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22478 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22479 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22480 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22481 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22482 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22483 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22484 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22485 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22486 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22487 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22488 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22489 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22490 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22491 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22492 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22493 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22494 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22495 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22496 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22497 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22498 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22499 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22500 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22501 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22502 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22503 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22504 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22505 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22506 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22507 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22508 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22509 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22510 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22511 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22512 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22513 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22514 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22515 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22516 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22517 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22518 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22519 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22520 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22521 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22522 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22523 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22524 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22525 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22526 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22527 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22528 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22529 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22530 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22531 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22532 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22533 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22534 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22535 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22536 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22537 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22538 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22539 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22540 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22541 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22542 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22543 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22544 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22545 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22546 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22547 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22548 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22549 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22550 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22551 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22552 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22553 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22554 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22555 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22556 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22557 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22558 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22559 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22560 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22561 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22562 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22563 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22564 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22565 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22566 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22567 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22568 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22569 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22570 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22571 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22572 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22573 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22574 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22575 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22576 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22577 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22578 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22579 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22580 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22581 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22582 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22583 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22584 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22585 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22586 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22587 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22588 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22589 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22590 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22591 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22592 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22593 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22594 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22595 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22596 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22597 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22598 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22599 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22600 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22601 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22602 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22603 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22604 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22605 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22606 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22607 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22608 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22609 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22610 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22611 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22612 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22613 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22614 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22615 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22616 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22617 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22618 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22619 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22620 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22621 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22622 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22623 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22624 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22625 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22626 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22627 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22628 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22629 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22630 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22631 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22632 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22633 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22634 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22635 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22636 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22637 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22638 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22639 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22640 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22641 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22642 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22643 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22644 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22645 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22646 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22647 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22648 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22649 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22650 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22651 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22652 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22653 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22654 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22655 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22656 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22657 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22658 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22659 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22660 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22661 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22662 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22663 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22664 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22665 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22666 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22667 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22668 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22669 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22670 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22671 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22672 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22673 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22674 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22675 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22676 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22677 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22678 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22679 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22680 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22681 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22682 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22683 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22684 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22685 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22686 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22687 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22688 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22689 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22690 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22691 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22692 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22693 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22694 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22695 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22696 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22697 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22698 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22699 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22700 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22701 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22702 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22703 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22704 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22705 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22706 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22707 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22708 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22709 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22710 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22711 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22712 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22713 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22714 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22715 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22716 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22717 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22718 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22719 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22720 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22721 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22722 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22723 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22724 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22725 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22726 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22727 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22728 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22729 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22730 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22731 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22732 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22733 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22734 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22735 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22736 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22737 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22738 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22739 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22740 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22741 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22742 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22743 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22744 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22745 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22746 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22747 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22748 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22749 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22750 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22751 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22752 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22753 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22754 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22755 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22756 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22757 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22758 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22759 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22760 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22761 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22762 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22763 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22764 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22765 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22766 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22767 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22768 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22769 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22770 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22771 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22772 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22773 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22774 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22775 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22776 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22777 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22778 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22779 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22780 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22781 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22782 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22783 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22784 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22785 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22786 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22787 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22788 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22789 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22790 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22791 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22792 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22793 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22794 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22795 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22796 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22797 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22798 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22799 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22800 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22801 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22802 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22803 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22804 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22805 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22806 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22807 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22808 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22809 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22810 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22811 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22812 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22813 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22814 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22815 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22816 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22817 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22818 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22819 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22820 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22821 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22822 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22823 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22824 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22825 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22826 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22827 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22828 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22829 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22830 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22831 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22832 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22833 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22834 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22835 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22836 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22837 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22838 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22839 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22840 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22841 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22842 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22843 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22844 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22845 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22846 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22847 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22848 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22849 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22850 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22851 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22852 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22853 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22854 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22855 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22856 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22857 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22858 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22859 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22860 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22861 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22862 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22863 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22864 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22865 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22866 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22867 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22868 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22869 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22870 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22871 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22872 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22873 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22874 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22875 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22876 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22877 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22878 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22879 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22880 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22881 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22882 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22883 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22884 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22885 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22886 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22887 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22888 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22889 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22890 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22891 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22892 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22893 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22894 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22895 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22896 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22897 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22898 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22899 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22900 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22901 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22902 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22903 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22904 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22905 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22906 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22907 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22908 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22909 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22910 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22911 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22912 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22913 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22914 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22915 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22916 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22917 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22918 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22919 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22920 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22921 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22922 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22923 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22924 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22925 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22926 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22927 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22928 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22929 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22930 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22931 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22932 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22933 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22934 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22935 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22936 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22937 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22938 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22939 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22940 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22941 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22942 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22943 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22944 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22945 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22946 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22947 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22948 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22949 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22950 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22951 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22952 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22953 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22954 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22955 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22956 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22957 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22958 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22959 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22960 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22961 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22962 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22963 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22964 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22965 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22966 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22967 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22968 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22969 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22970 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22971 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22972 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22973 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22974 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22975 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22976 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22977 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22978 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22979 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22980 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22981 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22982 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22983 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22984 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22985 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22986 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22987 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22988 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22989 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22990 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22991 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22992 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22993 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22994 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22995 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22996 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22997 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			22998 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			22999 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
