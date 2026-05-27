<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\UnitTests\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;
use CodeKandis\PhpUnit\Constraints\ArrayContainsKeyedSubsetConstraint;
use CodeKandis\PhpUnit\Constraints\ArrayContainsUnkeyedSubsetConstraint;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0003 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			3000 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3001 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3002 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3003 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3004 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3005 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3006 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3007 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3008 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3009 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3010 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3011 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3012 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3013 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3014 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3015 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3016 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3017 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3018 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3019 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3020 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3021 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3022 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3023 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3024 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3025 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3026 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3027 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3028 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3029 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3030 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3031 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3032 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3033 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3034 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3035 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3036 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3037 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3038 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3039 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3040 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3041 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3042 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3043 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3044 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3045 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3046 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3047 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3048 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3049 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3050 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3051 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3052 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3053 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3054 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3055 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3056 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3057 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3058 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3059 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3060 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3061 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3062 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3063 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3064 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3065 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3066 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3067 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3068 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3069 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3070 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3071 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3072 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3073 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3074 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3075 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3076 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3077 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3078 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3079 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_15, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3080 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3081 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3082 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3083 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3084 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3085 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3086 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3087 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3088 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3089 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3090 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3091 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3092 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3093 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3094 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3095 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3096 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3097 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3098 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3099 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3100 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3101 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3102 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3103 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3104 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3105 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3106 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3107 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3108 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3109 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3110 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3111 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3112 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3113 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3114 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3115 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3116 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3117 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3118 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3119 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3120 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3121 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3122 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3123 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3124 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3125 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3126 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3127 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3128 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3129 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3130 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3131 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3132 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3133 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3134 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3135 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3136 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3137 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3138 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3139 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3140 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3141 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3142 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3143 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3144 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3145 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3146 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3147 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3148 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3149 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3150 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3151 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3152 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3153 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3154 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3155 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3156 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3157 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3158 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3159 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3160 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3161 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3162 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3163 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3164 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3165 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3166 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3167 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3168 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3169 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3170 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3171 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3172 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3173 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3174 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3175 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3176 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3177 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3178 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3179 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3180 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3181 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3182 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3183 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3184 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3185 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3186 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3187 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3188 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3189 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_16, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3190 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3191 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3192 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3193 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3194 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3195 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3196 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3197 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3198 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3199 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3200 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3201 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3202 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3203 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3204 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3205 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3206 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3207 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3208 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3209 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3210 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3211 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3212 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3213 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3214 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3215 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3216 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3217 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3218 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3219 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3220 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3221 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3222 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3223 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3224 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3225 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3226 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3227 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3228 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3229 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3230 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3231 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3232 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3233 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3234 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3235 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3236 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3237 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3238 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3239 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3240 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3241 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3242 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3243 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3244 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3245 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3246 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3247 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3248 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3249 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3250 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3251 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3252 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3253 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3254 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3255 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3256 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3257 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3258 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3259 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3260 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3261 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3262 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3263 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3264 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3265 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3266 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3267 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3268 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3269 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3270 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3271 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3272 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3273 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3274 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3275 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3276 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3277 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3278 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3279 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3280 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3281 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3282 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3283 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3284 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3285 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3286 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3287 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3288 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3289 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3290 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3291 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3292 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3293 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3294 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3295 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3296 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3297 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3298 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3299 => [
				'constraint'     => new ArrayContainsKeyedSubsetConstraint( Values::ARRAY_SUBSET_17, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3300 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3301 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3302 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3303 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3304 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3305 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3306 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3307 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3308 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3309 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3310 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3311 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3312 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3313 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3314 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3315 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3316 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3317 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3318 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3319 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3320 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3321 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3322 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3323 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3324 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3325 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3326 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3327 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3328 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3329 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3330 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3331 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3332 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3333 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3334 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3335 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3336 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3337 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3338 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3339 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3340 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3341 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3342 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3343 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3344 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3345 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3346 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3347 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3348 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3349 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3350 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3351 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3352 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3353 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3354 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3355 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3356 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3357 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3358 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3359 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3360 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3361 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3362 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3363 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3364 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3365 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3366 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3367 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3368 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3369 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3370 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3371 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3372 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3373 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3374 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3375 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3376 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3377 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3378 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3379 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3380 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3381 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3382 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3383 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3384 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3385 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3386 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3387 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3388 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3389 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3390 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3391 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3392 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3393 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3394 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3395 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3396 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3397 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3398 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3399 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3400 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3401 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3402 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3403 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3404 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3405 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3406 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3407 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3408 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3409 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3410 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3411 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3412 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3413 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3414 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3415 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3416 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3417 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3418 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3419 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3420 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3421 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3422 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3423 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3424 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3425 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3426 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3427 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3428 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3429 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3430 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3431 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3432 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3433 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3434 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3435 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3436 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3437 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3438 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3439 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3440 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3441 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3442 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3443 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3444 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3445 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3446 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3447 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3448 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3449 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3450 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3451 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3452 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3453 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3454 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3455 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3456 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3457 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3458 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3459 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3460 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3461 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3462 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3463 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3464 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3465 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3466 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3467 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3468 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3469 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3470 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3471 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3472 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3473 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3474 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3475 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3476 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3477 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3478 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3479 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3480 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3481 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3482 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3483 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3484 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3485 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3486 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3487 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3488 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3489 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3490 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3491 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3492 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3493 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3494 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3495 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3496 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3497 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3498 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3499 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3500 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3501 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3502 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3503 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3504 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3505 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3506 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3507 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3508 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3509 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3510 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3511 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3512 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3513 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3514 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3515 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3516 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3517 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3518 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3519 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3520 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3521 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3522 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3523 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3524 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3525 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3526 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3527 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3528 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3529 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3530 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3531 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3532 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3533 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3534 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3535 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3536 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3537 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3538 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3539 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3540 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3541 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3542 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3543 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3544 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3545 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3546 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3547 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3548 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3549 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3550 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3551 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3552 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3553 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3554 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3555 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3556 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3557 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3558 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3559 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3560 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3561 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3562 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3563 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3564 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3565 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3566 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3567 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3568 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3569 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3570 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3571 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3572 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3573 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3574 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3575 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3576 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3577 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3578 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3579 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3580 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3581 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3582 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3583 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3584 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3585 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3586 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3587 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3588 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3589 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3590 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3591 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3592 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3593 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3594 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3595 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3596 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3597 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3598 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3599 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3600 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3601 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3602 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3603 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3604 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3605 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3606 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3607 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3608 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3609 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3610 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3611 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3612 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3613 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3614 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3615 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3616 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3617 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3618 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3619 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3620 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3621 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3622 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3623 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3624 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3625 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3626 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3627 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3628 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3629 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3630 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3631 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3632 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3633 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3634 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3635 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3636 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3637 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3638 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3639 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3640 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3641 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3642 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3643 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3644 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3645 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3646 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3647 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3648 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3649 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3650 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3651 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3652 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3653 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3654 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3655 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3656 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3657 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3658 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3659 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3660 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3661 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3662 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3663 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3664 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3665 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3666 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3667 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3668 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3669 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3670 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3671 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3672 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3673 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3674 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3675 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3676 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3677 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3678 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3679 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3680 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3681 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3682 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3683 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3684 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3685 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3686 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3687 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3688 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3689 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3690 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3691 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3692 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3693 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3694 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3695 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3696 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3697 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3698 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3699 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3700 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3701 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3702 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3703 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3704 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3705 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3706 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3707 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3708 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3709 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3710 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3711 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3712 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3713 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3714 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3715 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3716 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3717 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3718 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3719 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3720 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3721 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3722 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3723 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3724 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3725 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3726 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3727 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3728 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3729 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3730 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3731 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3732 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3733 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3734 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3735 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3736 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3737 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3738 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3739 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3740 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3741 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3742 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3743 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3744 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3745 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3746 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3747 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3748 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3749 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3750 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3751 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3752 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3753 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3754 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3755 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3756 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3757 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3758 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3759 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3760 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3761 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3762 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3763 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3764 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3765 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3766 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3767 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3768 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3769 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3770 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3771 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3772 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3773 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3774 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3775 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3776 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3777 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3778 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3779 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3780 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3781 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3782 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3783 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3784 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3785 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3786 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3787 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3788 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3789 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3790 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3791 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3792 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3793 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3794 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3795 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3796 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3797 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3798 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3799 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3800 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3801 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3802 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3803 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3804 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3805 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3806 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3807 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3808 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3809 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3810 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3811 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3812 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3813 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3814 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3815 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3816 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3817 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3818 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3819 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3820 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3821 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3822 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3823 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3824 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3825 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3826 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3827 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3828 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3829 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3830 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3831 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3832 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3833 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3834 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3835 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3836 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3837 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3838 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3839 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3840 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3841 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3842 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3843 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3844 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3845 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3846 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3847 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3848 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3849 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_4, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3850 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3851 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3852 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3853 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3854 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3855 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3856 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3857 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3858 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3859 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3860 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3861 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3862 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3863 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3864 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3865 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3866 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3867 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3868 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3869 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3870 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3871 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3872 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3873 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3874 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3875 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3876 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3877 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3878 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3879 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3880 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3881 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3882 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3883 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3884 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3885 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3886 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3887 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3888 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3889 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3890 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3891 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3892 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3893 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3894 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3895 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3896 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3897 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3898 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3899 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3900 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3901 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3902 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3903 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3904 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3905 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3906 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3907 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3908 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3909 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3910 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3911 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3912 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3913 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3914 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3915 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3916 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3917 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3918 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3919 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3920 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3921 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3922 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3923 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3924 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3925 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3926 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3927 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3928 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3929 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3930 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3931 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3932 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3933 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3934 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3935 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3936 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3937 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3938 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3939 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3940 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3941 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3942 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3943 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3944 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3945 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3946 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3947 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3948 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3949 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3950 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3951 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3952 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3953 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3954 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3955 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3956 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3957 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3958 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3959 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_5, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3960 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3961 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3962 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3963 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3964 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3965 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3966 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3967 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3968 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3969 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3970 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3971 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3972 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3973 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3974 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3975 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3976 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3977 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3978 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3979 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3980 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3981 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3982 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3983 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3984 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3985 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3986 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3987 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3988 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3989 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3990 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3991 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3992 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3993 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3994 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3995 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3996 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3997 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			3998 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			3999 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			]
		];
	}
}
