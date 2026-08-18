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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0020 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			20000 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20001 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20002 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20003 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20004 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20005 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20006 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20007 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20008 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20009 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20010 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20011 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20012 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20013 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20014 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20015 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20016 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20017 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20018 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20019 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20020 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20021 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20022 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20023 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20024 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20025 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20026 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20027 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20028 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20029 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20030 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20031 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20032 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20033 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20034 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20035 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20036 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20037 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20038 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20039 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20040 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20041 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20042 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20043 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20044 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20045 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20046 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20047 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20048 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20049 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20050 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20051 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20052 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20053 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20054 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20055 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20056 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20057 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20058 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20059 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20060 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20061 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20062 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20063 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20064 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20065 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20066 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20067 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20068 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20069 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20070 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20071 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20072 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20073 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20074 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20075 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20076 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20077 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20078 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20079 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20080 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20081 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20082 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20083 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20084 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20085 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20086 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20087 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20088 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20089 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20090 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20091 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20092 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20093 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20094 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20095 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20096 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20097 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20098 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20099 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20100 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20101 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20102 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20103 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20104 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20105 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20106 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20107 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20108 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20109 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20110 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20111 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20112 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20113 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20114 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20115 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20116 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20117 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20118 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20119 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20120 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20121 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20122 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20123 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20124 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20125 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20126 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20127 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20128 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20129 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20130 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20131 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20132 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20133 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20134 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20135 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20136 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20137 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20138 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20139 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20140 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20141 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20142 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20143 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20144 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20145 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20146 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20147 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20148 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20149 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20150 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20151 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20152 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20153 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20154 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20155 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20156 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20157 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20158 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20159 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20160 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20161 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20162 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20163 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20164 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20165 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20166 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20167 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20168 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20169 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20170 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20171 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20172 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20173 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20174 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20175 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20176 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20177 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20178 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20179 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20180 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20181 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20182 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20183 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20184 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20185 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20186 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20187 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20188 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20189 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20190 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20191 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20192 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20193 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20194 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20195 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20196 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20197 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20198 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20199 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20200 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20201 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20202 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20203 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20204 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20205 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20206 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20207 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20208 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20209 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20210 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20211 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20212 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20213 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20214 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20215 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20216 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20217 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20218 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20219 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20220 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20221 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20222 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20223 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20224 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20225 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20226 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20227 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20228 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20229 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20230 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20231 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20232 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20233 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20234 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20235 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20236 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20237 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20238 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20239 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20240 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20241 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20242 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20243 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20244 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20245 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20246 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20247 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20248 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20249 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20250 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20251 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20252 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20253 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20254 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20255 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20256 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20257 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20258 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20259 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20260 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20261 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20262 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20263 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20264 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20265 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20266 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20267 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20268 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20269 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20270 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20271 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20272 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20273 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20274 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20275 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20276 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20277 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20278 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20279 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20280 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20281 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20282 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20283 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20284 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20285 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20286 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20287 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20288 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20289 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20290 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20291 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20292 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20293 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20294 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20295 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20296 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20297 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20298 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20299 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20300 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20301 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20302 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20303 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20304 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20305 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20306 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20307 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20308 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20309 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20310 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20311 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20312 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20313 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20314 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20315 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20316 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20317 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20318 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20319 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20320 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20321 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20322 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20323 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20324 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20325 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20326 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20327 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20328 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20329 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20330 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20331 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20332 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20333 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20334 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20335 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20336 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20337 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20338 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20339 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20340 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20341 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20342 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20343 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20344 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20345 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20346 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20347 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20348 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20349 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20350 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20351 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20352 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20353 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20354 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20355 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20356 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20357 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20358 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20359 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20360 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20361 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20362 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20363 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20364 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20365 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20366 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20367 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20368 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20369 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20370 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20371 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20372 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20373 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20422 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20423 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20424 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20425 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20426 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20427 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20428 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20429 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20430 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20431 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20432 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20433 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20434 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20435 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20436 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20437 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20438 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20439 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20440 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20441 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20442 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20443 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20444 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20445 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20446 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20447 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20448 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20449 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20450 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20451 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20452 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20453 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20454 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20455 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20456 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20457 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20458 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20459 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20460 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20461 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20462 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20463 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20464 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20465 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20466 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20467 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20468 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20469 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20470 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20471 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20472 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20473 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20474 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20475 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20476 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20477 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20478 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20479 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20480 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20481 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20482 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20483 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20484 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20485 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20486 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20487 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20488 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20489 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20490 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20491 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20492 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20493 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20494 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20495 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20496 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20497 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20498 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20499 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20500 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20501 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20502 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20503 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20504 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20505 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20506 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20507 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20508 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20509 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20510 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20511 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20512 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20513 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20514 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20515 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20516 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20517 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20518 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20519 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20520 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20521 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20522 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20523 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20524 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20525 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20526 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20527 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20528 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20529 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20530 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20531 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20532 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20533 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20534 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20535 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20536 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20537 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20538 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20539 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20540 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20541 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20542 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20543 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20544 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20545 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20546 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20547 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20548 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20549 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20550 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20551 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20552 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20553 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20554 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20555 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20556 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20557 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20558 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20559 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20560 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20561 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20562 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20563 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20564 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20565 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20566 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20567 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20568 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20569 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20570 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20571 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20572 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20573 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20574 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20575 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20576 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20577 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20578 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20579 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20580 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20581 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20582 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20583 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20584 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20585 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20586 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20587 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20588 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20589 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20590 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20591 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20592 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20593 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20594 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20595 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20596 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20597 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20598 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20599 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20600 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20601 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20602 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20603 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20604 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20605 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20606 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20607 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20608 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20609 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20610 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20611 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20612 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20613 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20614 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20615 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20616 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20617 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20618 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20619 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20620 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20621 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20622 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20623 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20624 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20625 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20626 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20627 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20628 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20629 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20630 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20631 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20632 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20633 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20634 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20635 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20636 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20637 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20638 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20639 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20640 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20641 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20642 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20643 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20644 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20645 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20646 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20647 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20648 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20649 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20650 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20651 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20652 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20653 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20654 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20655 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20656 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20657 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20658 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20659 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20660 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20661 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20662 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20663 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20664 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20665 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20666 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20667 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20668 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20669 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20670 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20671 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20672 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20673 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20674 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20675 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20676 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20677 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20678 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20679 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20680 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20681 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20682 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20683 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20684 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20685 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20686 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20687 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20688 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20689 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20690 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20691 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20692 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20693 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20694 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20695 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20696 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20697 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20698 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20699 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20700 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20701 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20702 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20703 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20704 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20705 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20706 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20707 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20708 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20709 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20710 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20711 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20712 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20713 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20714 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20715 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20716 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20717 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20718 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20719 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20720 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20721 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20722 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20723 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20724 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20725 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20726 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20727 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20728 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20729 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20730 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20731 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20732 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20733 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20734 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20735 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20736 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20737 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20738 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20739 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20740 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20741 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20742 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20743 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20744 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20745 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20746 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20747 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20748 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20749 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20750 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20751 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20752 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20753 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20754 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20755 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20756 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20757 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20758 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20759 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20760 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20761 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20762 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20763 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20764 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20765 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20766 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20767 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20768 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20769 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20770 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20771 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20772 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20773 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20774 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20775 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20776 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20777 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20778 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20779 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20780 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20781 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20782 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20783 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20784 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20785 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20786 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20787 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20788 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20789 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20790 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20791 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20792 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20793 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20794 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20795 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20796 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20797 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20798 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20799 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20800 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20801 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20802 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20803 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20804 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20805 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20806 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20807 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20808 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20809 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20810 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20811 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20812 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20813 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20814 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20815 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20816 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20817 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20818 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20819 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20820 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20821 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20822 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20823 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20824 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20825 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20826 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20827 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20828 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20829 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20830 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20831 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20832 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20833 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20834 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20835 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20836 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20837 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20838 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20839 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20840 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20841 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20842 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20843 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20844 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20845 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20846 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20847 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20848 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20849 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20850 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20851 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20852 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20853 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20854 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20855 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20856 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20857 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20858 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20859 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20860 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20861 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20862 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20863 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20864 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20865 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20866 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20867 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20868 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20869 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20870 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20871 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20872 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20873 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20874 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20875 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20876 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20877 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20878 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20879 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20880 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20881 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20882 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20883 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20884 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20885 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20886 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20887 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20888 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20889 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20890 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20891 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20892 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20893 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20894 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20895 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20896 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20897 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20898 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20899 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20900 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20901 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20902 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20903 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20904 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20905 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20906 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20907 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20908 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20909 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20910 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20911 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20912 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20913 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20914 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20915 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20916 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20917 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20918 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20919 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20920 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20921 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20922 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20923 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20924 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20925 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20926 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20927 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20928 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20929 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20930 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20931 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20932 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20933 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20934 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20935 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20936 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20937 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20938 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20939 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20940 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20941 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20942 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20943 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20944 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20945 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20946 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20947 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20948 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20949 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20950 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20951 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20952 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20953 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20954 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20955 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20956 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20957 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20958 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20959 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20960 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20961 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20962 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20963 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20964 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20965 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20966 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20967 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20968 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20969 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20970 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20971 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20972 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20973 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20974 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20975 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20976 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20977 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20978 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20979 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20980 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20981 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20982 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20983 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20984 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20985 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20986 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20987 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20988 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20989 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20990 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20991 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20992 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20993 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20994 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			20995 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20996 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20997 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20998 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			20999 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			]
		];
	}
}
