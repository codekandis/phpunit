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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0009 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			9000 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9001 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9002 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9003 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9004 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9005 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9006 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9007 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9008 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9009 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9010 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9011 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9012 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9013 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9014 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9015 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9016 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9017 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9018 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9019 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9020 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9021 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9022 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9023 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9024 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9025 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9026 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9027 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9028 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9029 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9030 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9031 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9032 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9033 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9034 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9035 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9036 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9037 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9038 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9039 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9040 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9041 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9042 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9043 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9044 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9045 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9046 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9047 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9048 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9049 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9050 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9051 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9052 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9053 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9054 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9055 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9056 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9057 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9058 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9059 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9060 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9061 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9062 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9063 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9064 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9065 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9066 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9067 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9068 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9069 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9070 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9071 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9072 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9073 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9074 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9075 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9076 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9077 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9078 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9079 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9080 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9081 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9082 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9083 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9084 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9085 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9086 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9087 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9088 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9089 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9090 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9091 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9092 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9093 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9094 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9095 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9096 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9097 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9098 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9099 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9100 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9101 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9102 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9103 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9104 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9105 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9106 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9107 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9108 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9109 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9110 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9111 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9112 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9113 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9114 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9115 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9116 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9117 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9118 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9119 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9120 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9121 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9122 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9123 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9124 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9125 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9126 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9127 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9128 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9129 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9130 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9131 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9132 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9133 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9134 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9135 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9136 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9137 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9138 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9139 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9140 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9141 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9142 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9143 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9144 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9145 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9146 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9147 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9148 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9149 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9150 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9151 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9152 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9153 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9154 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9155 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9156 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9157 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9158 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9159 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9160 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9161 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9162 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9163 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9164 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9165 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9166 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9167 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9168 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9169 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9170 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9171 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9172 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9173 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9174 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9175 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9176 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9177 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9178 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9179 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9180 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9181 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9182 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9183 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9184 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9185 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9186 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9187 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9188 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9189 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9190 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9191 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9192 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9193 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9194 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9195 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9196 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9197 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9198 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9199 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9200 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9201 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9202 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9203 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9204 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9205 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9206 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9207 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9208 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9209 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9210 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9211 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9212 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9213 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9214 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9215 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9216 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9217 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9218 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9219 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9220 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9221 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9222 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9223 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9224 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9225 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9226 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9227 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9228 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9229 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9230 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9231 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9232 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9233 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9234 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9235 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9236 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9237 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9238 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9239 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9240 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9241 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9242 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9243 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9244 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9245 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9246 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9247 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9248 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9249 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9250 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9251 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9252 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9253 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9254 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9255 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9256 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9257 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9258 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9259 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9260 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9261 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9262 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9263 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9264 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9265 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9266 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9267 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9268 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9269 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9270 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9271 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9272 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9273 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9274 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9275 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9276 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9277 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9278 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9279 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9280 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9281 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9282 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9283 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9284 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9285 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9286 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9287 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9288 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9289 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9290 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9291 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9292 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9293 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9294 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9295 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9296 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9297 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9298 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9299 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9300 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9301 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9302 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9303 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9304 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9305 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9306 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9307 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9308 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9309 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9310 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9311 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9312 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9313 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9314 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9315 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9316 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9317 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9318 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9319 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9320 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9321 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9322 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9323 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9324 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9325 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9326 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9327 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9328 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9329 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9330 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9331 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9332 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9333 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9334 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9335 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9336 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9337 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9338 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9339 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9340 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9341 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9342 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9343 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9344 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9345 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9346 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9347 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9348 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9349 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9350 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9351 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9352 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9353 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9354 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9355 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9356 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9357 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9358 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9359 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9360 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9361 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9362 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9363 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9364 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9365 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9366 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9367 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9368 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9369 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9370 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9371 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9372 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9373 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9374 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9375 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9376 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9377 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9378 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9379 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9380 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9381 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9382 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9383 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9384 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9385 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9386 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9387 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9388 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9389 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9390 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9391 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9392 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9393 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9394 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9395 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9396 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9397 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9398 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9399 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9400 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9401 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9402 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9403 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9404 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9405 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9406 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9407 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9408 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9409 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9410 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9411 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9412 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9413 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9414 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9415 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9416 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9417 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9418 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9419 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9420 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9421 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9422 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9423 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9424 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9425 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9426 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9427 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9428 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9429 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9430 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9431 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9432 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9433 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9434 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9435 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9436 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9437 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9438 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9439 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9440 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9441 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9442 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9443 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9444 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9445 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9446 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9447 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9448 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9449 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9450 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9451 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9452 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9453 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9454 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9455 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9456 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9457 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9458 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9459 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9460 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9461 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9462 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9463 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9464 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9465 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9466 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9467 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9468 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9469 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9470 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9471 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9472 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9473 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9474 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9475 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9476 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9477 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9478 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9479 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9480 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9481 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9482 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9483 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9484 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9485 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9486 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9487 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9488 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9489 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9490 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9491 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9492 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9493 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9494 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9495 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9496 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9497 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9498 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9499 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9500 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9501 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9502 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9503 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9504 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9505 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9506 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9507 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9508 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9509 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9510 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9511 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9512 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9513 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9514 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9515 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9516 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9517 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9518 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9519 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9520 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9521 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9522 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9523 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9524 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9525 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9526 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9527 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9528 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9529 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9530 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9531 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9532 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9533 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9534 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9535 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9536 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9537 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9538 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9539 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9540 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9541 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9542 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9543 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9544 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9545 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9546 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9547 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9548 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9549 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9550 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9551 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9552 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9553 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9554 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9555 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9556 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9557 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9558 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9559 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9560 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9561 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9562 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9563 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9564 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9565 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9566 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9567 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9568 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9569 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9570 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9571 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9572 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9573 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9574 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9575 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9576 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9577 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9578 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9579 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9580 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9581 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9582 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9583 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9584 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9585 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9586 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9587 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9588 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9589 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9590 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9591 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9592 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9593 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9594 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9595 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9596 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9597 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9598 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9599 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9600 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9601 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9602 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9603 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9604 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9605 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9606 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9607 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9608 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9609 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9610 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9611 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9612 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9613 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9614 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9615 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9616 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9617 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9618 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9619 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9620 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9621 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9622 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9623 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9624 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9625 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9626 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9627 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9628 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9629 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9630 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9631 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9632 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9633 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9634 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9635 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9636 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9637 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9638 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9639 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9640 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9641 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9642 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9643 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9644 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9645 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9646 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9647 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_12, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9648 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9649 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9650 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9651 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9652 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9653 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9654 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9655 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9656 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9657 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9658 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9659 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9660 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9661 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9662 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9663 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9664 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9665 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9666 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9667 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9668 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9669 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9670 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9671 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9672 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9673 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9674 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9675 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9676 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9677 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9678 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9679 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9680 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9681 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9682 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9683 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9684 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9685 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9686 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9687 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9688 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9689 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9690 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9691 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9692 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9693 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9694 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9695 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9696 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9697 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9698 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9699 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9700 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9701 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9702 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9703 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9704 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9705 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9706 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9707 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9708 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9709 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9710 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9711 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9712 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9713 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9714 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9715 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9716 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9717 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9718 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9719 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9720 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9721 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9722 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9723 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9724 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9725 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9726 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9727 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9728 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9729 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9730 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9731 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9732 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9733 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9734 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9735 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9736 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9737 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9738 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9739 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9740 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9741 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9742 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9743 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9744 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9745 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9746 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9747 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9748 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9749 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9750 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9751 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9752 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9753 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9754 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9755 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9756 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9757 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9758 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9759 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9760 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9761 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9762 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9763 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9764 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9765 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9766 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9767 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9768 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9769 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9770 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9771 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9772 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9773 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9774 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9775 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9776 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9777 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9778 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9779 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9780 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9781 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9782 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9783 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9784 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9785 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9786 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9787 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9788 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9789 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9790 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9791 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_13, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9792 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9793 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9794 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9795 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9796 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9797 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9798 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9799 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9800 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9801 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9802 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9803 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9804 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9805 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9806 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9807 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9808 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9809 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9810 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9811 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9812 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9813 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9814 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9815 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9816 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9817 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9818 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9819 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9820 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9821 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9822 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9823 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9824 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9825 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9826 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9827 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9828 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9829 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9830 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9831 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9832 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9833 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9834 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9835 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9836 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9837 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9838 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9839 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9840 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9841 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9842 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9843 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9844 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9845 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9846 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9847 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9848 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9849 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9850 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9851 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9852 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9853 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9854 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9855 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9856 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9857 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9858 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9859 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9860 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9861 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9862 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9863 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9864 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9865 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9866 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9867 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9868 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9869 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9870 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9871 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9872 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9873 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9874 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9875 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9876 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9877 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9878 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9879 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9880 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9881 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9882 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9883 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9884 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9885 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9886 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9887 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9888 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9889 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9890 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9891 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9892 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9893 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9894 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9895 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9896 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9897 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9898 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9899 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9900 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9901 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9902 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9903 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9904 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9905 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9906 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9907 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9908 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9909 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9910 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9911 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9912 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9913 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9914 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9915 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9916 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9917 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9918 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9919 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9920 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9921 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9922 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9923 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9924 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9925 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9926 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9927 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9928 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9929 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9930 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9931 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9932 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9933 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9934 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9935 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_14, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9936 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9937 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9938 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9939 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9940 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9941 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9942 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9943 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9944 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9945 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9946 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9947 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9948 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9949 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9950 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9951 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9952 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9953 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9954 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9955 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9956 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9957 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9958 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9959 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9960 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9961 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9962 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9963 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9964 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9965 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9966 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9967 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9968 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9969 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9970 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9971 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9972 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9973 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9974 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9975 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9976 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9977 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9978 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9979 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9980 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9981 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9982 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9983 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9984 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9985 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9986 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9987 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9988 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9989 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9990 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9991 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9992 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9993 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9994 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9995 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9996 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9997 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			9998 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			9999 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
