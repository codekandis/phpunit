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
final readonly class ArraySubsetHelpersWithExpectedValueActualValueAndExpectedResultDataProvider0004 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			4000 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4001 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4002 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4003 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4004 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4005 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4006 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4007 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4008 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4009 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4010 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4011 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4012 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4013 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4014 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4015 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4016 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4017 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4018 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4019 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4020 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4021 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4022 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4023 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4024 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4025 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4026 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4027 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4028 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4029 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4030 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4031 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4032 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4033 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4034 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4035 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4036 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4037 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4038 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4039 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4040 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4041 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_22(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4042 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4043 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4044 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4045 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4046 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4047 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4048 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4049 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4050 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4051 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4052 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4053 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4054 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4055 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4056 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4057 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4058 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4059 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4060 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4061 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4062 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4063 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4064 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4065 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4066 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4067 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4068 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4069 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4070 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4071 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4072 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4073 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4074 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4075 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4076 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4077 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4078 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4079 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4080 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4081 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4082 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4083 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4084 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4085 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4086 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4087 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4088 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_23(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4089 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4090 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4091 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4092 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4093 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4094 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4095 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4096 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4097 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4098 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4099 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4100 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4101 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4102 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4103 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4104 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4105 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4106 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4107 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4108 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4109 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4110 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4111 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4112 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4113 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4114 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4115 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4116 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4117 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4118 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4119 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4120 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4121 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4122 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4123 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4124 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4125 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4126 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4127 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4128 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4129 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4130 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4131 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4132 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4133 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4134 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4135 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_24(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4136 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4137 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4138 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4139 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4140 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4141 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4142 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4143 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4144 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4145 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4146 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4147 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4148 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4149 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4150 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4151 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4152 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4153 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4154 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4155 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4156 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4157 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4158 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4159 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4160 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4161 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4162 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4163 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4164 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4165 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4166 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4167 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4168 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4169 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4170 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4171 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4172 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4173 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4174 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4175 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4176 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4177 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4178 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4179 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4180 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4181 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4182 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_25(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4183 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4184 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4185 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4186 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4187 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4188 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4189 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4190 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4191 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4192 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4193 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4194 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4195 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4196 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4197 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4198 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4199 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4200 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4201 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4202 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4203 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4204 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4205 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4206 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4207 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4208 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4209 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4210 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4211 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4212 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4213 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4214 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4215 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4216 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4217 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4218 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4219 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4220 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4221 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4222 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4223 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4224 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4225 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4226 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4227 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4228 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4229 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_16(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4230 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4231 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4232 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4233 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4234 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4235 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4236 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4237 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4238 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4239 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4240 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4241 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4242 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4243 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4244 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4245 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4246 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4247 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4248 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4249 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4250 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4251 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4252 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4253 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4254 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4255 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4256 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4257 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4258 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4259 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4260 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4261 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4262 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4263 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4264 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4265 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4266 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4267 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4268 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4269 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4270 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4271 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4272 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4273 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4274 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4275 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4276 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArray_17(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4277 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4278 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4279 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4280 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4281 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4282 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4283 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4284 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4285 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4286 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4287 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4288 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4289 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4290 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4291 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4292 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4293 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4294 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4295 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4296 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4297 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4298 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4299 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4300 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4301 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4302 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4303 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4304 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4305 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4306 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4307 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4308 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4309 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4310 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4311 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4312 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4313 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4314 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4315 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4316 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4317 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4318 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4319 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4320 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4321 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4322 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4323 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_26(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4324 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4325 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4326 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4327 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4328 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4329 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4330 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4331 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4332 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4333 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4334 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4335 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4336 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4337 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4338 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4339 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4340 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4341 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4342 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4343 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4344 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4345 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4346 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4347 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4348 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4349 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4350 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4351 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4352 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4353 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4354 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4355 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4356 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4357 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4358 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4359 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4360 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4361 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4362 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4363 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4364 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4365 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4366 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4367 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4368 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4369 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4370 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_27(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4371 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4372 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4373 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4374 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4375 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4376 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4377 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4378 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4379 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4380 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4381 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4382 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4383 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4384 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4385 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4386 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4387 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4388 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4389 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4390 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4391 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4392 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4393 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4394 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4395 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4396 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4397 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4398 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4399 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4400 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4401 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4402 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4403 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4404 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4405 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4406 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4407 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4408 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4409 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4410 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4411 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4412 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4413 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4414 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4415 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4416 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4417 => [
				'arraySubsetHelper' => new ArraySubsetHelperExposingValuesAreEqualMethodAccessor( Values::BOOLEAN_TRUE ),
				'expectedValue'     => Values::createArraySubset_28(),
				'actualValue'       => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
