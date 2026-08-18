<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\Helpers\AbstractArraySubsetHelperTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Accessors\ArraySubsetHelperExposingValuesAreEqualMethodAccessor;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing array subset helpers with expected value, actual value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0001 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1001 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1002 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1003 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1004 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1005 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1006 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1007 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1008 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1009 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1010 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1011 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1012 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1013 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1014 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1015 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1016 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1017 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1018 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1019 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1020 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1021 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1022 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1023 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1024 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1025 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1026 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1027 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1028 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1029 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1030 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1031 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1032 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1033 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1034 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1035 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1036 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1037 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1038 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1039 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1040 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1041 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1042 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1043 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1044 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1045 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1046 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1047 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1048 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1049 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1050 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1051 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1052 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1053 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1054 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1055 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1056 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1057 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1058 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1059 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1060 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1061 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1062 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1063 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1064 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1065 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1066 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1067 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1068 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1069 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1070 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1071 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1072 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1073 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1074 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1075 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1076 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1077 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1078 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1079 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1080 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1081 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1082 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1083 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1084 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1085 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1086 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1087 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1088 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1089 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1090 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1091 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1092 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1093 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1094 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1095 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1096 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1097 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1098 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1099 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1100 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1101 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1102 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1103 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1104 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1105 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1106 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1107 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1108 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1109 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1110 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1111 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1112 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1113 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1114 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1115 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1116 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1117 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1118 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1119 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1120 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1121 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1122 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1123 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1124 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1125 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1126 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1127 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1128 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1129 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1130 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1131 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1132 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1133 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1134 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1135 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1136 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1137 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1138 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1139 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1140 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1141 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1142 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1143 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1144 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1145 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1146 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1147 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1148 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1149 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1150 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1151 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1152 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1153 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1154 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1155 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1156 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1157 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1158 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1159 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1160 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1161 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1162 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1163 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1164 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1165 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1166 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1167 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1168 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1169 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1170 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1171 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1172 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1173 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1174 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1175 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1176 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1177 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1178 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1179 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1180 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1181 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1182 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1183 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1184 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1185 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1186 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1187 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1188 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1189 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1190 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1191 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1192 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1193 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1194 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1195 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1196 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1197 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1198 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1199 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1200 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1201 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1202 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1203 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1204 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1205 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1206 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1207 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1208 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1209 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1210 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1211 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1212 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1213 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1214 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1215 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1216 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1217 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1218 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1219 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1220 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1221 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1222 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1223 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1224 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1225 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1226 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1227 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1228 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1229 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1230 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1231 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1232 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1233 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1234 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1235 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1236 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1237 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1238 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1239 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1240 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1241 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1242 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1243 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1244 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1245 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1246 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1247 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1248 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1249 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1250 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1251 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1252 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1253 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1254 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1255 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1256 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1257 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1258 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1259 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1260 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1261 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1262 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1263 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1264 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1265 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1266 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1267 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1268 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1269 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1270 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1271 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1272 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1273 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1274 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1275 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1276 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1277 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1278 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1279 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1280 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1281 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1282 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1283 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1284 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1285 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1286 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1287 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1288 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1289 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1290 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1291 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1292 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1293 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1294 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1295 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1296 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1297 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1298 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1299 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1300 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1301 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1302 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1303 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1304 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1305 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1306 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1307 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1308 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1309 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1310 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1311 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1312 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1313 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1314 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1315 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1316 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1317 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1318 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1319 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1320 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1321 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1322 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1323 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1324 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1325 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1326 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1327 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1328 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1329 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1330 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1331 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1332 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1333 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1334 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1335 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1336 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1337 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1338 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1339 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1340 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1341 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1342 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1343 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1344 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1345 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1346 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1347 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1348 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1349 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1350 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1351 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1352 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1353 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1354 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1355 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1356 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1357 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1358 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1359 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1360 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1361 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1362 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1363 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1364 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1365 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1366 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1367 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1368 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1369 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1370 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1371 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1372 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1373 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1374 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1375 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1376 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1377 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1378 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1379 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1380 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1381 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1382 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1383 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1384 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1385 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1386 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1387 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1388 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1389 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1390 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1391 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1392 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1393 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1394 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1395 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1396 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1397 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1398 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1399 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1400 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1401 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1402 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1403 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1404 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1405 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1406 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1407 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1408 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1409 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1410 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1411 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1412 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1413 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1414 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1415 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1416 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1417 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1418 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1419 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1420 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1421 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1422 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1423 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1424 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1425 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1426 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1427 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1428 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1429 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1430 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1431 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1432 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1433 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1434 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1435 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1436 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1437 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1438 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1439 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1440 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1441 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1442 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1443 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1444 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1445 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1446 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1447 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1448 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1449 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1450 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1451 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1452 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1453 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1454 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1455 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1456 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1457 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1458 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1459 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1460 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1461 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1462 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1463 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1464 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1465 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1466 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1467 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1468 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1469 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1470 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1471 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1472 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1473 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1474 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1475 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1476 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1477 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1478 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1479 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1480 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1481 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1482 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1483 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1484 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1485 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1486 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1487 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1488 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1489 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1490 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1491 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1492 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1493 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1494 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1495 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1496 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1497 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1498 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1499 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1500 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1501 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1502 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1503 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1504 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1505 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1506 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1507 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1508 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1509 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1510 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1511 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1512 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1513 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1514 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1515 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1516 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1517 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1518 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1519 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1520 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1521 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1522 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1523 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1524 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1525 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1526 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1527 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1528 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1529 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1530 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1531 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1532 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1533 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1534 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1535 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1536 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1537 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1538 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1539 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1540 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1541 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1542 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1543 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1544 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1545 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1546 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1547 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1548 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1549 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1550 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1551 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1552 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1553 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1554 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1555 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1556 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1557 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1558 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1559 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1560 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1561 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1562 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1563 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1564 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1565 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1566 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1567 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1568 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1569 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1570 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1571 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1572 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1573 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1574 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1575 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1576 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1577 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1578 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1579 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1580 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1581 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1582 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1583 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1584 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1585 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1586 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1587 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1588 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1589 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1590 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1591 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1592 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1593 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1594 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1595 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1596 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1597 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1598 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1599 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1600 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1601 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1602 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1603 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1604 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1605 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1606 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1607 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1608 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1609 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1610 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1611 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1612 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1613 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1614 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1615 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1616 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1617 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1618 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1619 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1620 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1621 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1622 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1623 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1624 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1625 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1626 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1627 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1628 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1629 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1630 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1631 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1632 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1633 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1634 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1635 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1636 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1637 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1638 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1639 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1640 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1641 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1642 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1643 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1644 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1645 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1646 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1647 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1648 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1649 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1650 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1651 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1652 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1653 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1654 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1655 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1656 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1657 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1658 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1659 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1660 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1661 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1662 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1663 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1664 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1665 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1666 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1667 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1668 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1669 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1670 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1671 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1672 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1673 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1674 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1675 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1676 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1677 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1678 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1679 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1680 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1681 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1682 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1683 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1684 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1685 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1686 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1687 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1688 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1689 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1690 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1691 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1692 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1693 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1694 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1695 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1696 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1697 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1698 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1699 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1700 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1701 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1702 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1703 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1704 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1705 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1706 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1707 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1708 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1709 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1710 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1711 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1712 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1713 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1714 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1715 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1716 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1717 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1718 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1719 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1720 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1721 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1722 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1723 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1724 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1725 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1726 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1727 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1728 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1729 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1730 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1731 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1732 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1733 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1734 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1735 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1736 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1737 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1738 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1739 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1740 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1741 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1742 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1743 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1744 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1745 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1746 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1747 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1748 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1749 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1750 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1751 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1752 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1753 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1754 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1755 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1756 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1757 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1758 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1759 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1760 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1761 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1762 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1763 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1764 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1765 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1766 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1767 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1768 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1769 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1770 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1771 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1772 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1773 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1774 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1775 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1776 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1777 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1778 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1779 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1780 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1781 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1782 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1783 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1784 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1785 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1786 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1787 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1788 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1789 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1790 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1791 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1792 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1793 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1794 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1795 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1796 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1797 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1798 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1799 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1800 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1801 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1802 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1803 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1804 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1805 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1806 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1807 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1808 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1809 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1810 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1811 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1812 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1813 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1814 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1815 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1816 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1817 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1818 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1819 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1820 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1821 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1822 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1823 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1824 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1825 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1826 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1827 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1828 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1829 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1830 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1831 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1832 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1833 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1834 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1835 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1836 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1837 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1838 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1839 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1840 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1841 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1842 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1843 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1844 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1845 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1846 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1847 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1848 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1849 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1850 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1851 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1852 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1853 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1854 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1855 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1856 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1857 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1858 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1859 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1860 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1861 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1862 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1863 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1864 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1865 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1866 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1867 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1868 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1869 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1870 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1871 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1872 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1873 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1874 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1875 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1876 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1877 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1878 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1879 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1880 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1881 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1882 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1883 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1884 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1885 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1886 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1887 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1888 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1889 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1890 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1891 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1892 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1893 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1894 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1895 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1896 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1897 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1898 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1899 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1900 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1901 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1902 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1903 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1904 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1905 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1906 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1907 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1908 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1909 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1910 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1911 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1912 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1913 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1914 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1915 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1916 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1917 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1918 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1919 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1920 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1921 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1922 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1923 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1924 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1925 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1926 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1927 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1928 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1929 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1930 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1931 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1932 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1933 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1934 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1935 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1936 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1937 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1938 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1939 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1940 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1941 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1942 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1943 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1944 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1945 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1946 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1947 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1948 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1949 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1950 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1951 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1952 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1953 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1954 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1955 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1956 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1957 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1958 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1959 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1960 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1961 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1962 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1963 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1964 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1965 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1966 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1967 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1968 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			1969 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1970 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1971 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1972 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1973 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1974 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1975 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1976 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1977 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1978 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1979 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1980 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1981 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1982 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1983 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1984 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1985 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1986 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1987 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1988 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1989 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1990 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1991 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1992 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1993 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1994 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1995 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1996 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1997 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1998 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			1999 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_FALSE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
