<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsKeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0018 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			18000 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18001 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18002 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18003 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18004 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18005 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18006 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18007 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18008 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18009 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18010 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18011 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18012 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18013 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18014 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18015 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18016 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18017 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18018 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18019 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18020 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18021 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18022 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18023 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18024 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18025 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18026 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18027 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18028 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18029 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18030 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18031 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18032 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18033 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18034 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18035 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18036 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18037 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18038 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18039 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18040 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18041 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18042 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18043 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18044 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18045 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18046 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18047 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18048 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18049 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18050 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18051 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18052 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18053 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18054 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18055 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18056 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18057 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18058 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18059 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18060 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18061 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18062 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18063 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18064 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18065 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18066 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18067 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18068 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18069 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18070 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18071 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18072 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18073 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18074 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18075 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18076 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18077 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18078 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18079 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18080 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18081 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18082 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18083 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18084 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18085 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18086 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18087 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18088 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18089 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18090 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18091 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18092 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18093 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18094 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18095 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18096 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18097 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18098 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18099 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18100 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18101 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18102 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18103 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18104 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18105 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18106 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18107 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18108 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18109 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18110 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18111 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18112 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18113 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18114 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18115 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18116 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18117 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18118 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18119 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18120 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18121 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18122 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18123 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18124 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18125 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18126 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18127 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18128 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18129 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18130 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18131 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18132 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18133 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18134 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18135 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18136 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18137 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18138 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18139 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18140 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18141 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18142 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18143 => [
				'constraint'     => new IsKeyedSubsetOfArrayConstraint( Values::createArraySubset_28(), Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18144 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18145 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18146 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18147 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18148 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18149 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18150 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18151 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18152 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18153 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18154 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18155 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18156 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18157 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18158 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18159 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18160 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18161 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18162 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18163 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18164 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18165 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18166 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18167 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18168 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18169 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18170 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18171 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18172 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18173 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18174 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18175 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18176 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18177 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18178 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18179 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18180 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18181 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18182 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18183 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18184 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18185 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18186 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18187 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18188 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18189 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18190 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18191 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18192 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18193 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18194 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18195 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18196 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18197 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18198 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18199 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18200 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18201 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18202 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18203 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18204 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18205 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18206 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18207 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18208 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18209 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18210 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18211 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18212 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18213 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18214 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18215 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18216 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18217 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18218 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18219 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18220 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18221 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18222 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18223 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18224 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18225 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18226 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18227 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18228 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18229 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18230 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18231 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18232 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18233 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18234 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18235 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18236 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18237 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18238 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18239 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18240 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18241 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18242 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18243 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18244 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18245 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18246 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18247 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18248 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18249 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18250 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18251 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18252 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18253 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18254 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18255 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18256 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18257 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18258 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18259 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18260 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18261 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18262 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18263 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18264 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18265 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18266 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18267 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18268 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18269 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18270 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18271 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18272 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18273 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18274 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18275 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18276 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18277 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18278 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18279 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18280 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18281 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18282 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18283 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18284 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18285 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18286 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18287 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18288 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18289 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18290 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18291 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18292 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18293 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18294 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18295 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18296 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18297 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18298 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18299 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18300 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18301 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18302 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18303 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18304 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18305 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18306 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18307 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18308 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18309 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18310 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18311 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18312 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18313 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18314 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18315 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18316 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18317 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18318 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18319 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18320 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18321 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18322 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18323 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18324 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18325 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18326 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18327 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18328 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18329 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18330 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18331 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18332 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18333 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18334 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18335 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18336 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18337 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18338 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18339 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18340 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18341 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18342 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18343 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18344 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18345 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18346 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18347 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18348 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18349 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18350 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18351 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18352 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18353 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18354 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18355 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18356 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18357 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18358 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18359 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18360 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18361 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18362 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18363 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18364 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18365 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18366 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18367 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18368 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18369 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18370 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18371 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18372 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18373 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18374 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18375 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18376 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18377 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18378 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18379 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18380 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18381 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18382 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18383 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18384 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18385 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18386 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18387 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18388 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18389 => [
				'constraint'     => new IsSubClassOfConstraint( Values::INTERFACE_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18390 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18391 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18392 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18393 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18394 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18395 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18396 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18397 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18398 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18399 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18400 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18401 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18402 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18403 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18404 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18405 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18406 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18407 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18408 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18409 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18410 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18411 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18412 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18413 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18414 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18415 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18416 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18417 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18418 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18419 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18420 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18421 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18422 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18423 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18424 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18425 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18426 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18427 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18428 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18429 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18430 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18431 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18432 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18433 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18434 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18435 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18436 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18437 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18438 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18439 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18440 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18441 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18442 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18443 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18444 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18445 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18446 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18447 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18448 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18449 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18450 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18451 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18452 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18453 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18454 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18455 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18456 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18457 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18458 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18459 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18460 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18461 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18462 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18463 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18464 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18465 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18466 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18467 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18468 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18469 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18470 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18471 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_0 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18472 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18473 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18474 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18475 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18476 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18477 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18478 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18479 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18480 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18481 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18482 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18483 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18484 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18485 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18486 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18487 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18488 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18489 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18490 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18491 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18492 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18493 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18494 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18495 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18496 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18497 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18498 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18499 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18500 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18501 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18502 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18503 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18504 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18505 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18506 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18507 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18508 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18509 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18510 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18511 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18512 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18513 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18514 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18515 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18516 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18517 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18518 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18519 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18520 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18521 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18522 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18523 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18524 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18525 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18526 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18527 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18528 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18529 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18530 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18531 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18532 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18533 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18534 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18535 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18536 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18537 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18538 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18539 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18540 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18541 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18542 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18543 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18544 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18545 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18546 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18547 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18548 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18549 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18550 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18551 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18552 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18553 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_1 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18554 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18555 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18556 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18557 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18558 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18559 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18560 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18561 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18562 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18563 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18564 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18565 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18566 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18567 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18568 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18569 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18570 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18571 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18572 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18573 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18574 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18575 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18576 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18577 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18578 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18579 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18580 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18581 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18582 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18583 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18584 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18585 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18586 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18587 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18588 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18589 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18590 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18591 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18592 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18593 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18594 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18595 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18596 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18597 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18598 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18599 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18600 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18601 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18602 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18603 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18604 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18605 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18606 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18607 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18608 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18609 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18610 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18611 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18612 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18613 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18614 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18615 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18616 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18617 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18618 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18619 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18620 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18621 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18622 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18623 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18624 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18625 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18626 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18627 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18628 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18629 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18630 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18631 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18632 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18633 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18634 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18635 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_2 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18636 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18637 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18638 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18639 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18640 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18641 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18642 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18643 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18644 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18645 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18646 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18647 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18648 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18649 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18650 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18651 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18652 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18653 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18654 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18655 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18656 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18657 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18658 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18659 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18660 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18661 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18662 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18663 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18664 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18665 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18666 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18667 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18668 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18669 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18670 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18671 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18672 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18673 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18674 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18675 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18676 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18677 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18678 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18679 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18680 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18681 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18682 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18683 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18684 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18685 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18686 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18687 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18688 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18689 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18690 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18691 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18692 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18693 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18694 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18695 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18696 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18697 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18698 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18699 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18700 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18701 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18702 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18703 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18704 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18705 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18706 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18707 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18708 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18709 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18710 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18711 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18712 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18713 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18714 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18715 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18716 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18717 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_3 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18718 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18719 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18720 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18721 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18722 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18723 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18724 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18725 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18726 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18727 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18728 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18729 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18730 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18731 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18732 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18733 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18734 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18735 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18736 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18737 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18738 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18739 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18740 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18741 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18742 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18743 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18744 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18745 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18746 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18747 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18748 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18749 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18750 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18751 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18752 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18753 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18754 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18755 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18756 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18757 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18758 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18759 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18760 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18761 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18762 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18763 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18764 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18765 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18766 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18767 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18768 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18769 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18770 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18771 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18772 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18773 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18774 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18775 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18776 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18777 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18778 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18779 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18780 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18781 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18782 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18783 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18784 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18785 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18786 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18787 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18788 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18789 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18790 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18791 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18792 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18793 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18794 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			18795 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18796 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18797 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18798 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18799 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_4 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18800 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18801 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18802 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18803 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18804 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18805 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18806 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18807 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18808 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18809 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18810 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18811 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18812 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18813 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18814 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18815 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18816 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18817 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18818 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18819 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18820 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18821 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18822 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18823 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18824 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18825 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18826 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18827 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18828 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18829 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18830 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18831 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18832 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18833 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18834 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18835 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18836 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18837 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18838 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18839 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18840 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18841 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18842 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18843 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18844 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18845 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18846 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18847 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18848 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18849 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18850 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18851 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18852 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18853 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18854 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18855 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18856 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18857 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18858 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18859 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18860 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18861 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18862 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18863 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18864 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18865 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18866 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18867 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18868 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18869 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18870 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18871 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18872 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18873 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18874 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18875 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18876 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18877 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18878 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18879 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18880 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18881 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_5 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18882 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18883 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18884 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18885 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18886 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18887 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18888 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18889 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18890 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18891 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18892 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18893 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18894 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18895 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18896 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18897 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18898 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18899 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18900 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18901 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18902 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18903 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18904 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18905 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18906 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18907 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18908 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18909 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18910 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18911 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18912 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18913 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18914 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18915 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18916 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18917 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18918 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18919 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18920 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18921 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18922 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18923 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18924 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18925 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18926 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18927 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18928 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18929 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18930 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18931 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18932 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18933 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18934 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18935 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18936 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18937 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18938 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18939 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18940 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18941 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18942 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18943 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18944 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18945 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18946 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18947 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18948 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18949 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18950 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18951 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18952 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18953 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18954 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18955 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18956 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18957 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18958 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18959 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18960 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18961 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18962 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18963 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_6 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18964 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18965 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18966 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18967 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18968 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18969 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18970 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18971 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18972 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18973 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18974 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18975 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18976 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18977 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18978 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18979 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18980 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18981 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18982 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18983 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18984 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18985 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18986 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18987 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18988 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18989 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18990 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18991 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18992 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18993 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18994 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18995 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18996 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18997 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18998 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			18999 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
