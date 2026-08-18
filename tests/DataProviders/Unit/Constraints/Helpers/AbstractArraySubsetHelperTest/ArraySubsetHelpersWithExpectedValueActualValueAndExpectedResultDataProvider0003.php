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
final readonly class ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0003 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			3000 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3001 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3002 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3003 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3004 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3005 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3006 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3007 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_4,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3008 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3009 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3010 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3011 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3012 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3013 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3014 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3015 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3016 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3017 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3018 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3019 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3020 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3021 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3022 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3023 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3024 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3025 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3026 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3027 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3028 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3029 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3030 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3031 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3032 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3033 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3034 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3035 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3036 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3037 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3038 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3039 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3040 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3041 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3042 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3043 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3044 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3045 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3046 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3047 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3048 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3049 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3050 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3051 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3052 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3053 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3054 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_5,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3055 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3056 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3057 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3058 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3059 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3060 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3061 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3062 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3063 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3064 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3065 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3066 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3067 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3068 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3069 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3070 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3071 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3072 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3073 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3074 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3075 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3076 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3077 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3078 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3079 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3080 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3081 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3082 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3083 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3084 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3085 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3086 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3087 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3088 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3089 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3090 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3091 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3092 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3093 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3094 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3095 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3096 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3097 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3098 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3099 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3100 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3101 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_6,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3102 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3103 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3104 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3105 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3106 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3107 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3108 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3109 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3110 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3111 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3112 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3113 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3114 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3115 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3116 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3117 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3118 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3119 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3120 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3121 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3122 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3123 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3124 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3125 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3126 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3127 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3128 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3129 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3130 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3131 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3132 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3133 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3134 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3135 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3136 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3137 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3138 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3139 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3140 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3141 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3142 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3143 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3144 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3145 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3146 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3147 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3148 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_7,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3149 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3150 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3151 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3152 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3153 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3154 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3155 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3156 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3157 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3158 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3159 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3160 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3161 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3162 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3163 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3164 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3165 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3166 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3167 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3168 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3169 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3170 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3171 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3172 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3173 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3174 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3175 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3176 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3177 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3178 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3179 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3180 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3181 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3182 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3183 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3184 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3185 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3186 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3187 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3188 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3189 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3190 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3191 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3192 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3193 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3194 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3195 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_8,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3196 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3197 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3198 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3199 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3200 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3201 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3202 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3203 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3204 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3205 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3206 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3207 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3208 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3209 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3210 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3211 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3212 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3213 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3214 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3215 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3216 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3217 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3218 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3219 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3220 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3221 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3222 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3223 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3224 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3225 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3226 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3227 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3228 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3229 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3230 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3231 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3232 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3233 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3234 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3235 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3236 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3237 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3238 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3239 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3240 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3241 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3242 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_9,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3243 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3244 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3245 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3246 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3247 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3248 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3249 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3250 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3251 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3252 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3253 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3254 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3255 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3256 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3257 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3258 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3259 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3260 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3261 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3262 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3263 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3264 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3265 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3266 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3267 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3268 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3269 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3270 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3271 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3272 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3273 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3274 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3275 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3276 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3277 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3278 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3279 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3280 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3281 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3282 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3283 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3284 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3285 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3286 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3287 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3288 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3289 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_10,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3290 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3291 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3292 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3293 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3294 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3295 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3296 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3297 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3298 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3299 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3300 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3301 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3302 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3303 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3304 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3305 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3306 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3307 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3308 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3309 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3310 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3311 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3312 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3313 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3314 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3315 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3316 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3317 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3318 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3319 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3320 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3321 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3322 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3323 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3324 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3325 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3326 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3327 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3328 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3329 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3330 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3331 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3332 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3333 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3334 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3335 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3336 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_11,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3337 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3338 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3339 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3340 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3341 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3342 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3343 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3344 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3345 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3346 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3347 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3348 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3349 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3350 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3351 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3352 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3353 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3354 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3355 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3356 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3357 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3358 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3359 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3360 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3361 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3362 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3363 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3364 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3365 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3366 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3367 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3368 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3369 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3370 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3371 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3372 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3373 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3374 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3375 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3376 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3377 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3378 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3379 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3380 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3381 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3382 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3383 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_12,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3384 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3385 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3386 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3387 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3388 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3389 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3390 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3391 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3392 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3393 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3394 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3395 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3396 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3397 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3398 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3399 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3400 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3401 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3402 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3403 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3404 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3405 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3406 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3407 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3408 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3409 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3410 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3411 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3412 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3413 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3414 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3415 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3416 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3417 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3418 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3419 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3420 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3421 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3422 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3423 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3424 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3425 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3426 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3427 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3428 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3429 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3430 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_13,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3431 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3432 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3433 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3434 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3435 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3436 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3437 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3438 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3439 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3440 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3441 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3442 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3443 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3444 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3445 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3446 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3447 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3448 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3449 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3450 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3451 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3452 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3453 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3454 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3455 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3456 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3457 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3458 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3459 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3460 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3461 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3462 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3463 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3464 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3465 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3466 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3467 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3468 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3469 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3470 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3471 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3472 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3473 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3474 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3475 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3476 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3477 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_14,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3478 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3479 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3480 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3481 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3482 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3483 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3484 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3485 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3486 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3487 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3488 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3489 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3490 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3491 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3492 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3493 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3494 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3495 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3496 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3497 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3498 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3499 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3500 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3501 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3502 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3503 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3504 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3505 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3506 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3507 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3508 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3509 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3510 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3511 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3512 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3513 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3514 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3515 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3516 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3517 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3518 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3519 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3520 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3521 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3522 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3523 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3524 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_15,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3525 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3526 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3527 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3528 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3529 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3530 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3531 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3532 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3533 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3534 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3535 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3536 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3537 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3538 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3539 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3540 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3541 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3542 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3543 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3544 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3545 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3546 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3547 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3548 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3549 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3550 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3551 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3552 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3553 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3554 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3555 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3556 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3557 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3558 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3559 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3560 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3561 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3562 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3563 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3564 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3565 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3566 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3567 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3568 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3569 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3570 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3571 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_16,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3572 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3573 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3574 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3575 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3576 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3577 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3578 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3579 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3580 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3581 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3582 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3583 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3584 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3585 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3586 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3587 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3588 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3589 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3590 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3591 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3592 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3593 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3594 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3595 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3596 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3597 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3598 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3599 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3600 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3601 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3602 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3603 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3604 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3605 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3606 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3607 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3608 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3609 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3610 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3611 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3612 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3613 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3614 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3615 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3616 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3617 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3618 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_17,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3619 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3620 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3621 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3622 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3623 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3624 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3625 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3626 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3627 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3628 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3629 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3630 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3631 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3632 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3633 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3634 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3635 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3636 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3637 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3638 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3639 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3640 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3641 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3642 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3643 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3644 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3645 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3646 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3647 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3648 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3649 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3650 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3651 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3652 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3653 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3654 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3655 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3656 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3657 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3658 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3659 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3660 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3661 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3662 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3663 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3664 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3665 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_12,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3666 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3667 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3668 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3669 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3670 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3671 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3672 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3673 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3674 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3675 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3676 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3677 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3678 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3679 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3680 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3681 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3682 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3683 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3684 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3685 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3686 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3687 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3688 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3689 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3690 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3691 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3692 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3693 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3694 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3695 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3696 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3697 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3698 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3699 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3700 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3701 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3702 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3703 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3704 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3705 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3706 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3707 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3708 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3709 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3710 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3711 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3712 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_13,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3713 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3714 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3715 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3716 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3717 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3718 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3719 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3720 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3721 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3722 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3723 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3724 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3725 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3726 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3727 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3728 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3729 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3730 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3731 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3732 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3733 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3734 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3735 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3736 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3737 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3738 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3739 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3740 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3741 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3742 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3743 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3744 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3745 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3746 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3747 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3748 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3749 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3750 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3751 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3752 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3753 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3754 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3755 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3756 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3757 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3758 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3759 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_18,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3760 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3761 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3762 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3763 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3764 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3765 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3766 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3767 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3768 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3769 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3770 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3771 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3772 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3773 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3774 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3775 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3776 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3777 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3778 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3779 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3780 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3781 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3782 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3783 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3784 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3785 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3786 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3787 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3788 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3789 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3790 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3791 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3792 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3793 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3794 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3795 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3796 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3797 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3798 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3799 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3800 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3801 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3802 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3803 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3804 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3805 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3806 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_19,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3807 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3808 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3809 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3810 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3811 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3812 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3813 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3814 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3815 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3816 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3817 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3818 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3819 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3820 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3821 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3822 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3823 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3824 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3825 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3826 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3827 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3828 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3829 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3830 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3831 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3832 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3833 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3834 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3835 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3836 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3837 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3838 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3839 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3840 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3841 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			3842 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3843 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3844 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3845 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3846 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3847 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3848 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3849 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3850 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3851 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3852 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3853 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::ARRAY_SUBSET_20,
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3854 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3855 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3856 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3857 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3858 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3859 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3860 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3861 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3862 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3863 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3864 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3865 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3866 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3867 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3868 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3869 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3870 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3871 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3872 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3873 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3874 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3875 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3876 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3877 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3878 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3879 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3880 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3881 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3882 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3883 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3884 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3885 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3886 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3887 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3888 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3889 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3890 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3891 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3892 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3893 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3894 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3895 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3896 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3897 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3898 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3899 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3900 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_14(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3901 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3902 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3903 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3904 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3905 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3906 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3907 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3908 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3909 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3910 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3911 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3912 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3913 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3914 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3915 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3916 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3917 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3918 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3919 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3920 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3921 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3922 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3923 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3924 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3925 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3926 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3927 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3928 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3929 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3930 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3931 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3932 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3933 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3934 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3935 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3936 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3937 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3938 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3939 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3940 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3941 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3942 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3943 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3944 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3945 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3946 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3947 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_15(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3948 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3949 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3950 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3951 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3952 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3953 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3954 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3955 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3956 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3957 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3958 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3959 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3960 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3961 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3962 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3963 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3964 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3965 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3966 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3967 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3968 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3969 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3970 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3971 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3972 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3973 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3974 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3975 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3976 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3977 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3978 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3979 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3980 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3981 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3982 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3983 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3984 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3985 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3986 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3987 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3988 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3989 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3990 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3991 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3992 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3993 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3994 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_21(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3995 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3996 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3997 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3998 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			3999 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
