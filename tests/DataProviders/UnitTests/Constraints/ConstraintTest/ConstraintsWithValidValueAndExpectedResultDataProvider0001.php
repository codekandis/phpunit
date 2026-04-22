<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0001 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1001 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1002 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1003 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1004 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1005 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1006 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1007 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1008 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1009 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1010 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1011 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1012 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1013 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1014 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1015 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1016 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1017 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1018 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1019 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1020 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1021 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1022 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1023 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1024 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1025 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1026 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1027 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1028 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1029 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1030 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1031 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1032 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1033 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1034 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1035 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1036 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1037 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1038 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1039 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1040 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1041 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1042 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1043 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1044 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1045 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1046 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1047 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1048 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1049 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1050 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1051 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1052 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1053 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1054 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1055 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1056 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1057 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1058 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1059 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1060 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1061 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1062 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1063 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1064 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1065 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1066 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1067 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1068 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1069 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1070 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1071 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1072 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1073 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1074 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1075 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1076 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1077 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1078 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1079 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1080 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1081 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1082 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1083 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1084 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1085 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1086 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1087 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1088 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1089 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1090 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1091 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1092 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1093 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1094 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1095 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1096 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1097 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1098 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1099 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1100 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1101 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1102 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1103 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1104 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1105 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1106 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1107 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1108 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1109 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1110 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1111 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1112 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1113 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1114 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1115 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1116 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1117 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1118 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1119 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1120 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1121 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1122 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1123 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1124 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1125 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1126 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1127 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1128 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1129 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1130 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1131 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1132 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1133 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1134 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1135 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1136 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1137 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1138 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1139 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1140 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1141 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1142 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1143 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1144 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1145 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1146 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1147 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1148 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1149 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1150 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1151 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1152 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1153 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1154 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1155 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1156 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1157 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1158 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1159 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1160 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1161 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1162 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1163 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1164 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1165 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1166 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1167 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1168 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1169 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1170 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1171 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1172 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1173 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1174 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1175 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1176 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1177 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1178 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1179 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1180 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1181 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1182 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1183 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1184 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1185 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1186 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1187 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1188 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1189 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1190 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1191 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1192 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1193 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1194 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1195 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1196 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1197 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1198 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1199 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1200 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1201 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1202 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1203 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1204 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1205 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1206 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1207 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1208 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1209 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1210 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1211 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1212 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1213 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1214 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1215 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1216 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1217 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1218 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1219 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1220 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1221 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1222 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1223 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1224 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1225 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1226 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1227 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1228 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1229 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1230 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1231 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1232 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1233 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1234 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1235 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1236 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1237 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1238 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1239 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1240 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1241 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1242 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1243 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1244 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1245 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1246 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1247 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1248 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1249 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1250 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1251 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1252 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1253 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1254 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1255 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1256 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1257 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1258 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1259 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1260 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1261 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1262 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1263 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1264 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1265 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1266 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1267 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1268 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1269 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1270 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1271 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1272 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1273 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1274 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1275 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1276 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1277 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1278 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1279 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1280 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1281 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1282 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1283 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1284 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1285 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1286 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1287 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1288 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1289 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1290 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1291 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1292 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1293 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1294 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1295 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1296 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1297 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1298 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1299 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1300 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1301 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1302 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1303 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1304 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1305 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1306 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1307 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1308 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1309 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1310 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1311 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1312 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1313 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1314 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1315 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1316 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1317 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1318 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1319 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1320 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1321 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1322 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1323 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1324 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1325 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1326 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1327 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1328 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1329 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1330 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1331 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1332 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1333 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1334 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1335 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1336 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1337 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1338 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1339 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1340 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1341 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1342 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1343 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1344 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1345 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1346 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1347 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1348 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1349 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1350 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1351 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1352 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1353 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1354 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1355 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1356 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1357 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1358 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1359 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1360 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1361 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1362 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1363 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1364 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1365 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1366 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1367 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1368 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1369 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1370 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1371 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1372 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1373 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1374 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1375 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1376 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1377 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1378 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1379 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1380 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1381 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1382 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1383 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1384 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1385 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1386 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1387 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1388 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1389 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1390 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1391 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1392 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1393 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1394 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1395 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1396 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1397 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1398 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1399 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1400 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1401 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1402 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1403 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1404 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1405 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1406 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1407 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1408 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1409 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1410 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1411 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1412 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1413 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1414 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1415 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1416 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1417 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1418 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1419 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1420 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1421 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1422 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1423 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1424 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1425 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1426 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1427 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1428 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1429 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1430 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1431 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1432 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1433 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1434 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1435 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1436 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1437 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1438 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1439 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1440 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1441 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1442 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1443 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1444 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1445 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1446 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1447 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1448 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1449 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1450 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1451 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1452 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1453 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1454 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1455 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1456 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1457 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1458 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1459 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1460 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1461 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1462 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1463 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1464 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1465 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1466 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1467 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1468 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1469 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1470 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1471 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1472 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1473 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1474 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1475 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1476 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1477 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1478 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1479 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1480 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1481 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1482 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1483 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1484 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1485 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1486 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1487 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1488 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1489 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1490 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1491 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1492 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1493 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1494 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1495 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1496 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1497 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1498 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1499 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1500 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1501 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1502 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1503 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1504 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1505 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1506 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1507 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1508 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1509 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1510 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1511 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1512 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1513 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1514 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1515 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1516 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1517 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1518 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1519 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1520 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1521 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1522 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1523 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1524 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1525 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1526 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1527 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1528 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1529 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1530 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1531 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1532 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1533 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1534 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1535 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1536 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1537 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1538 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1539 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1540 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1541 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1542 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1543 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1544 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1545 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1546 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1547 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1548 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1549 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1550 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1551 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1552 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1553 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1554 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1555 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1556 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1557 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1558 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1559 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1560 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1561 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1562 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1563 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1564 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1565 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1566 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1567 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1568 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1569 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1570 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1571 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1572 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1573 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1574 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1575 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1576 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1577 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1578 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1579 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1580 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1581 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1582 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1583 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1584 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1585 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1586 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1587 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1588 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1589 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1590 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1591 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1592 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1593 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1594 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1595 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1596 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1597 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1598 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1599 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1600 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1601 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1602 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1603 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1604 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1605 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1606 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1607 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1608 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1609 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1610 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1611 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1612 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1613 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1614 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1615 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1616 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1617 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1618 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1619 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1620 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1621 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1622 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1623 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1624 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1625 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1626 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1627 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1628 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1629 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1630 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1631 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1632 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1633 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1634 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1635 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1636 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1637 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1638 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1639 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1640 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1641 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1642 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1643 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1644 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1645 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1646 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1647 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1648 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1649 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1650 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1651 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1652 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1653 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1654 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1655 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1656 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1657 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1658 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1659 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1660 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1661 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1662 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1663 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1664 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1665 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1666 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1667 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1668 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1669 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1670 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1671 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1672 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1673 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1674 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1675 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1676 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1677 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1678 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1679 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1680 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1681 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1682 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1683 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1684 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1685 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1686 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1687 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1688 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1689 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1690 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1691 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1692 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1693 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1694 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1695 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1696 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1697 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1698 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1699 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1700 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1701 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1702 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1703 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1704 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1705 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1706 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1707 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1708 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1709 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1710 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1711 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1712 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1713 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1714 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1715 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1716 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1717 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1718 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1719 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1720 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1721 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1722 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1723 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1724 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1725 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1726 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1727 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1728 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1729 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1730 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1731 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1732 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1733 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1734 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1735 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1736 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1737 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1738 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1739 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1740 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1741 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1742 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1743 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1744 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1745 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1746 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1747 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1748 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1749 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1750 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1751 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1752 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1753 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1754 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1755 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1756 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1757 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1758 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1759 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1760 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1761 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1762 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1763 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1764 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1765 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1766 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1767 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1768 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1769 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1770 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1771 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1772 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1773 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1774 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1775 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1776 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1777 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1778 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1779 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1780 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1781 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1782 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1783 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1784 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1785 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1786 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1787 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1788 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1789 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1790 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1791 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1792 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1793 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1794 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1795 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1796 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1797 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1798 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1799 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1800 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1801 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1802 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1803 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1804 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1805 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1806 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1807 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1808 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1809 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1810 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1811 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1812 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1813 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1814 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1815 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1816 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1817 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1818 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1819 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1820 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1821 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1822 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1823 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1824 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1825 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1826 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1827 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1828 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1829 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1830 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1831 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1832 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1833 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1834 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1835 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1836 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1837 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1838 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1839 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1840 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1841 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1842 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1843 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1844 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1845 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1846 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1847 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1848 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1849 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1850 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1851 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1852 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1853 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1854 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1855 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1856 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1857 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1858 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1859 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1860 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1861 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1862 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1863 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1864 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1865 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1866 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1867 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1868 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1869 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1870 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1871 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1872 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1873 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1874 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1875 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1876 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1877 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1878 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1879 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1880 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1881 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1882 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1883 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1884 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1885 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1886 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1887 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1888 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1889 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1890 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1891 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1892 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1893 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1894 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1895 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1896 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1897 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1898 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1899 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1900 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1901 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1902 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1903 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1904 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1905 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1906 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1907 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1908 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1909 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1910 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1911 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1912 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1913 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1914 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1915 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1916 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1917 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1918 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1919 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1920 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1921 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1922 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1923 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1924 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1925 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1926 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1927 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1928 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1929 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1930 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1931 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1932 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1933 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1934 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1935 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1936 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1937 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1938 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1939 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1940 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1941 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1942 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1943 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1944 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1945 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1946 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1947 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1948 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1949 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1950 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1951 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1952 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1953 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1954 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1955 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1956 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1957 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1958 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1959 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1960 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1961 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1962 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1963 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1964 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1965 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			1966 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1967 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1968 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1969 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1970 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1971 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1972 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1973 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1974 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1975 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1976 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1977 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1978 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1979 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1980 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1981 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1982 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1983 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1984 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1985 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1986 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1987 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1988 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1989 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1990 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1991 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1992 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1993 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1994 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1995 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1996 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1997 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1998 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			1999 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
