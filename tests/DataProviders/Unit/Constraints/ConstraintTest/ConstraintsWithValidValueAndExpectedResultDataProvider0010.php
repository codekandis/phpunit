<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0010 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			10000 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10001 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10002 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10003 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10004 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10005 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10006 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10007 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10008 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10009 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10010 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10011 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10012 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10013 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10014 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10015 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10016 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10017 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10018 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10019 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10020 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10021 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10022 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10023 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10024 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10025 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10026 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10027 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10028 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10029 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10030 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10031 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10032 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10033 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10034 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10035 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10036 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10037 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10038 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10039 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10040 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10041 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10042 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10043 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10044 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10045 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10046 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10047 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10048 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10049 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10050 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10051 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10052 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10053 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10054 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10055 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10056 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10057 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10058 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10059 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10060 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10061 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10062 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10063 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10064 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10065 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10066 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10067 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10068 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10069 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10070 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10071 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10072 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10073 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10074 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10075 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10076 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10077 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10078 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10079 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10080 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10081 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10082 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10083 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10084 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10085 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10086 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10087 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10088 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10089 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10090 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10091 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10092 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10093 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10094 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10095 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10096 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10097 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10098 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10099 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10100 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10101 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10102 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10103 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10104 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10105 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10106 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10107 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10108 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10109 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10110 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10111 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10112 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10113 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10114 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10115 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10116 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10117 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10118 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10119 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10120 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10121 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10122 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10123 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10124 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10125 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10126 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10127 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10128 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10129 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10130 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10131 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10132 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10133 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10134 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10135 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10136 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10137 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10138 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10139 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10140 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10141 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10142 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10143 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10144 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10145 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10146 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10147 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10148 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10149 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10150 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10151 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10152 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10153 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10154 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10155 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10156 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10157 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10158 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10159 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10160 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10161 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10162 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10163 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10164 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10165 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10166 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10167 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10168 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10169 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10170 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10171 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10172 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10173 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10174 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10175 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10176 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10177 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10178 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10179 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10180 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10181 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10182 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10183 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10184 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10185 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10186 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10187 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10188 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10189 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10190 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10191 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10192 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10193 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10194 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10195 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10196 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10197 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10198 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10199 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10200 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10201 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10202 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10203 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10204 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10205 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10206 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10207 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10208 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10209 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10210 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10211 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10212 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10213 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10214 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10215 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10216 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10217 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10218 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10219 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10220 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10221 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10222 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10223 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10224 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10225 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10226 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10227 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10228 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10229 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10230 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10231 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10232 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10233 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10234 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10235 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10236 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10237 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10238 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10239 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10240 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10241 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10242 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10243 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10244 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10245 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10246 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10247 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10248 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10249 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10250 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10251 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10252 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10253 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10254 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10255 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10256 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10257 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10258 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10259 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10260 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10261 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10262 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10263 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10264 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10265 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10266 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10267 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10268 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10269 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10270 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10271 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10272 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10273 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10274 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10275 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10276 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10277 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10278 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10279 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10280 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10281 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10282 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10283 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10284 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10285 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10286 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10287 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10288 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10289 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10290 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10291 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10292 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10293 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10294 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10295 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10296 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10297 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10298 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10299 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10300 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10301 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10302 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10303 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10304 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10305 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10306 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10307 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10308 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10309 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10310 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10311 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10312 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10313 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10314 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10315 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10316 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10317 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10318 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10319 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10320 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10321 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10322 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10323 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10324 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10325 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10326 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10327 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10328 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10329 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10330 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10331 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10332 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10333 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10334 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10335 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10336 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10337 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10338 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10339 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10340 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10341 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10342 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10343 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10344 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10345 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10346 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10347 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10348 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10349 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10350 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10351 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10352 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10353 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10354 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10355 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10356 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10357 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10358 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10359 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10360 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10361 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10362 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10363 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10364 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10365 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10366 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10367 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10368 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10369 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10370 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10371 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10372 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10373 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10374 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10375 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10376 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10377 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10378 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10379 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10380 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10381 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10382 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10383 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10384 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10385 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10386 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10387 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10388 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10389 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10390 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10391 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10392 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10393 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10394 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10395 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10396 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10397 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10398 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10399 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10400 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10401 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10402 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10403 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10404 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10405 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10406 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10407 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10408 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10409 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10410 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10411 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10412 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10413 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10414 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10415 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10416 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10417 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10418 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10419 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10420 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10421 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10422 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10423 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10424 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10425 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10426 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10427 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10428 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10429 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10430 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10431 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10432 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10433 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10434 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10435 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10436 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10437 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10438 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10439 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10440 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10441 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10442 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10443 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10444 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10445 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10446 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10447 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10448 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10449 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10450 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10451 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10452 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10453 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10454 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10455 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10456 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10457 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10458 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10459 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10460 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10461 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10462 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10463 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10464 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10465 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10466 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10467 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10468 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10469 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10470 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10471 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10472 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10473 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10474 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10475 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10476 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10477 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10478 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10479 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10480 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10481 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10482 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10483 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10484 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10485 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10486 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10487 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10488 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10489 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10490 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10491 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10492 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10493 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10494 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10495 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10496 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10497 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10498 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10499 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10500 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10501 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10502 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10503 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10504 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10505 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10506 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10507 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10508 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10509 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10510 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10511 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_14(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10512 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10513 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10514 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10515 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10516 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10517 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10518 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10519 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10520 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10521 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10522 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10523 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10524 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10525 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10526 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10527 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10528 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10529 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10530 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10531 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10532 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10533 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10534 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10535 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10536 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10537 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10538 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10539 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10540 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10541 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10542 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10543 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10544 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10545 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10546 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10547 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10548 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10549 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10550 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10551 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10552 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10553 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10554 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10555 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10556 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10557 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10558 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10559 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10560 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10561 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10562 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10563 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10564 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10565 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10566 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10567 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10568 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10569 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10570 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10571 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10572 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10573 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10574 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10575 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10576 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10577 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10578 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10579 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10580 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10581 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10582 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10583 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10584 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10585 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10586 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10587 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10588 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10589 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10590 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10591 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10592 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10593 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10594 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10595 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10596 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10597 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10598 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10599 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10600 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10601 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10602 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10603 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10604 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10605 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10606 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10607 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10608 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10609 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10610 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10611 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10612 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10613 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10614 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10615 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10616 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10617 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10618 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10619 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10620 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10621 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10622 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10623 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10624 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10625 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10626 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10627 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10628 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10629 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10630 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10631 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10632 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10633 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10634 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10635 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10636 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10637 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10638 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10639 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10640 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10641 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10642 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10643 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10644 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10645 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10646 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10647 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10648 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10649 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10650 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10651 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10652 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10653 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10654 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10655 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArray_15(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10656 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10657 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10658 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10659 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10660 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10661 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10662 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10663 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10664 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10665 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10666 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10667 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10668 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10669 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10670 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10671 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10672 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10673 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10674 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10675 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10676 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10677 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10678 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10679 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10680 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10681 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10682 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10683 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10684 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10685 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10686 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10687 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10688 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10689 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10690 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10691 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10692 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10693 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10694 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10695 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10696 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10697 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10698 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10699 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10700 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10701 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10702 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10703 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10704 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10705 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10706 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10707 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10708 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10709 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10710 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10711 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10712 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10713 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10714 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10715 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10716 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10717 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10718 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10719 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10720 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10721 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10722 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10723 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10724 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10725 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10726 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10727 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10728 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10729 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10730 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10731 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10732 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10733 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10734 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10735 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10736 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10737 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10738 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10739 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10740 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10741 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10742 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10743 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10744 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10745 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10746 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10747 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10748 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10749 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10750 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10751 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10752 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10753 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10754 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10755 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10756 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10757 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10758 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10759 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10760 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10761 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10762 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10763 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10764 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10765 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10766 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10767 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10768 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10769 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10770 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10771 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10772 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10773 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10774 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10775 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10776 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10777 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10778 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10779 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10780 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10781 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10782 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10783 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10784 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10785 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10786 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10787 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10788 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10789 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10790 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10791 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10792 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10793 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10794 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10795 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10796 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10797 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10798 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10799 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_21(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10800 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10801 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10802 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10803 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10804 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10805 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10806 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10807 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10808 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10809 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10810 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10811 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10812 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10813 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10814 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10815 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10816 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10817 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10818 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10819 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10820 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10821 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10822 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10823 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10824 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10825 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10826 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10827 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10828 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10829 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10830 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10831 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10832 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10833 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10834 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10835 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10836 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10837 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10838 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10839 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10840 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10841 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10842 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10843 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10844 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10845 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10846 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10847 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10848 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10849 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10850 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10851 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10852 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10853 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10854 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10855 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10856 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10857 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10858 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10859 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10860 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10861 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10862 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10863 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			10864 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10865 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10866 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10867 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10868 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10869 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10870 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10871 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10872 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10873 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10874 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10875 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10876 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10877 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10878 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10879 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10880 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10881 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10882 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10883 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10884 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10885 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10886 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10887 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10888 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10889 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10890 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10891 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10892 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10893 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10894 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10895 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10896 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10897 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10898 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10899 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10900 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10901 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10902 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10903 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10904 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10905 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10906 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10907 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10908 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10909 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10910 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10911 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10912 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10913 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10914 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10915 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10916 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10917 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10918 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10919 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10920 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10921 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10922 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10923 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10924 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10925 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10926 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10927 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10928 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10929 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10930 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10931 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10932 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10933 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10934 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10935 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10936 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10937 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10938 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10939 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10940 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10941 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10942 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10943 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_22(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10944 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10945 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10946 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10947 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10948 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10949 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10950 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10951 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10952 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10953 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10954 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10955 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10956 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10957 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10958 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10959 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10960 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10961 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10962 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10963 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10964 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10965 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10966 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10967 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10968 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10969 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10970 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10971 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10972 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10973 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10974 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10975 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10976 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10977 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10978 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10979 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10980 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10981 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10982 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10983 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10984 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10985 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10986 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10987 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10988 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10989 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10990 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10991 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10992 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10993 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10994 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10995 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10996 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10997 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10998 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			10999 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::createArraySubset_23(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
