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
				'expectedArray' => Values::ARRAY_13,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1001 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_13,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1002 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_13,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1003 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_13,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1004 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1005 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1006 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1007 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1008 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1009 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1010 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1011 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1012 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1013 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1014 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1015 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1016 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1017 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1018 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1019 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_18,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1020 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1021 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1022 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1023 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1024 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1025 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1026 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1027 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1028 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1029 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1030 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1031 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_7,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1032 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1033 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_13,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1036 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1037 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1038 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1039 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1040 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1041 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1042 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1043 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_19,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1044 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1045 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1046 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1047 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_19,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1048 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1049 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1050 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1051 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1052 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1053 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1054 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1055 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_0,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1056 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1057 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1058 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1059 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_18,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			],
			1060 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_0
			],
			1061 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_FALSE,
				'message'       => Values::STRING_1
			],
			1062 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_0
			],
			1063 => [
				'testCase'      => new TestCaseClassAccessor( Values::EMPTY_STRING ),
				'expectedArray' => Values::ARRAY_SUBSET_20,
				'actualSubset'  => Values::ARRAY_SUBSET_20,
				'strict'        => Values::BOOLEAN_TRUE,
				'message'       => Values::STRING_1
			]
		];
	}
}
