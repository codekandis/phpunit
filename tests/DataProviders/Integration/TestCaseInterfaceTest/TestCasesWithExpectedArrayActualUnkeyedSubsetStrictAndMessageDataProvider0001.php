<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Integration\TestCaseInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\TestCaseClassAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing test cases with expected array, actual unkeyed subset, strict and message.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class TestCasesWithExpectedArrayActualUnkeyedSubsetStrictAndMessageDataProvider0001 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1001 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1002 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1003 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1004 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1005 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1006 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1007 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1008 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1009 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1010 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1011 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1012 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1013 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1014 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1015 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1016 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1017 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1018 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1019 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1020 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1021 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1022 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1023 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1024 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1025 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1026 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1027 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1028 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1029 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1030 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1031 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1032 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1033 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1034 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1035 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1036 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1037 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1038 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1039 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1040 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1041 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1042 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1043 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1044 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1045 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1046 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1047 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1048 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1049 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1050 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1051 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1052 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1053 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1054 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1055 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1056 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1057 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1058 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1059 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1060 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1061 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1062 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1063 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1064 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1065 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1066 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1067 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1068 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1069 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1070 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1071 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1072 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1073 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1074 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1075 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1076 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1077 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1078 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1079 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1080 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1081 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1082 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1083 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1084 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1085 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1086 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1087 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1088 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1089 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1090 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArray_15(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1091 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArray_15(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1092 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArraySubset_24(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1093 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArraySubset_24(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1094 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1095 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1096 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1097 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_15(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1098 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1099 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1100 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1101 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1102 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1103 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1104 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1105 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1106 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1107 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1108 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1109 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1110 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1111 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1112 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1113 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1114 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1115 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1116 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1117 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1118 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1119 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1120 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1121 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1122 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1123 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1124 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1125 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1126 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::createArraySubset_21(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1127 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_21(),
				'actualSubset'  => Values::createArraySubset_21(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1128 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1129 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1130 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1131 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1132 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1133 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1134 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1135 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1136 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1137 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1138 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1139 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1140 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1141 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1142 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1143 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1144 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1145 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1146 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1147 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1148 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::createArraySubset_22(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1149 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_22(),
				'actualSubset'  => Values::createArraySubset_22(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1150 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1151 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1152 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1153 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1154 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1155 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1156 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1157 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1158 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1159 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1160 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1161 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1162 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1163 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1164 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1165 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1166 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::createArraySubset_23(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1167 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_23(),
				'actualSubset'  => Values::createArraySubset_23(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1168 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1169 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1170 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1171 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1172 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1173 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1174 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1175 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1176 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1177 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1178 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1179 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_2,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1180 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1181 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1182 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1183 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1184 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1185 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1186 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1187 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1188 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1189 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1190 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1191 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1192 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1193 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1194 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1195 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_8,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1196 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1197 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1198 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1199 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1200 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1201 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1202 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1203 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1204 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1205 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1206 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1207 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1208 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1209 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1210 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1211 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1212 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1213 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1214 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1215 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1216 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1217 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1218 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1219 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_5,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1220 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1221 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1222 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1223 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1224 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1225 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1226 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1227 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1228 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1229 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_9,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1230 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1231 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1232 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1233 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_10,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1234 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1235 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1236 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1237 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1238 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1239 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1240 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1241 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1242 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1243 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1244 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1245 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_15,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1246 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1247 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1248 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1249 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_16,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1250 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1251 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1252 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1253 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_12,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1254 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1255 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1256 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1257 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1258 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1259 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1260 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1261 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1262 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1263 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1264 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1265 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1266 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1267 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1268 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArray_15(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1269 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArray_15(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1270 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArraySubset_24(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1271 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArraySubset_24(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1272 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1273 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1274 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1275 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_24(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1276 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1277 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1278 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1279 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1280 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1281 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1282 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1283 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1284 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1285 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1286 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1287 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1288 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1289 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1290 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1291 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1292 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1293 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1294 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1295 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1296 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1297 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1298 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1299 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1300 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1301 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1302 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1303 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1304 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1305 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1306 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::createArraySubset_25(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1307 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_25(),
				'actualSubset'  => Values::createArraySubset_25(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1308 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1309 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1310 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1311 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1312 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1313 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1314 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1315 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1316 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1317 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1318 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1319 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1320 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1321 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1322 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1323 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1324 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1325 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1326 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1327 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1328 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1329 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1330 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1331 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1332 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1333 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1334 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1335 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_16(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1336 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1337 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1338 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1339 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1340 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1341 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1342 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1343 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1344 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1345 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1346 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1347 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1348 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1349 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1350 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1351 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1352 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1353 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1354 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1355 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1356 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1357 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1358 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1359 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1360 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_17(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1361 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_17(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1362 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_17(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1363 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArray_17(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1364 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1365 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1366 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1367 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1368 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1369 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1370 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1371 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArray_17(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1372 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1373 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1374 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1375 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1376 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1377 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1378 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1379 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_3,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1380 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1381 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1382 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1383 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1384 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1385 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1386 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1387 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_1,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1388 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1389 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1390 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1391 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::ARRAY_SUBSET_6,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1392 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1393 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1394 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1395 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArray_16(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1396 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1397 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1398 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1399 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_26(),
				'actualSubset'  => Values::createArraySubset_26(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1400 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1401 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1402 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1403 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1404 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1405 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1406 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1407 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1408 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1409 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1410 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1411 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_27(),
				'actualSubset'  => Values::createArraySubset_27(),
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1412 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1413 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1414 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1415 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1416 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1417 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1418 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1419 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1420 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::createArraySubset_28(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1421 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::createArraySubset_28(),
				'actualSubset'  => Values::createArraySubset_28(),
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			]
		];
	}
}
