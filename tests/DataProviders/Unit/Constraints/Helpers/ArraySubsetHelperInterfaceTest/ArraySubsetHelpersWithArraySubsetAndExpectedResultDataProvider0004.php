<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\Helpers\ArraySubsetHelperInterfaceTest;

use CodeKandis\PhpUnit\Constraints\Helpers\KeyedArraySubsetHelper;
use CodeKandis\PhpUnit\Constraints\Helpers\UnkeyedArraySubsetHelper;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ArraySubsetHelpersWithArraySubsetAndExpectedResultDataProvider0004 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			4000 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4001 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4002 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4003 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4004 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4005 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4006 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4007 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4008 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4009 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4010 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4011 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4012 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4013 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4014 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4015 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4016 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4017 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4018 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4019 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4020 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4021 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4022 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4023 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4024 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4025 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4026 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4027 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4028 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4029 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4030 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4031 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4032 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4033 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4034 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4035 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4036 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4037 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4038 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4039 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4040 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4041 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_22(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4042 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4043 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4044 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4045 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4046 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4047 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4048 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4049 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4050 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4051 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4052 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4053 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4054 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4055 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4056 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4057 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4058 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4059 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4060 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4061 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4062 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4063 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4064 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4065 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4066 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4067 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4068 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4069 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4070 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4071 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4072 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4073 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4074 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4075 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4076 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4077 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4078 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4079 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4080 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4081 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4082 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4083 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4084 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4085 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4086 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4087 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4088 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_23(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4089 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4090 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4091 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4092 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4093 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4094 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4095 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4096 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4097 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4098 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4099 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4100 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4101 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4102 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4103 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4104 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4105 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4106 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4107 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4108 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4109 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4110 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4111 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4112 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4113 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4114 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4115 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4116 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4117 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4118 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4119 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4120 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4121 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4122 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4123 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4124 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4125 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4126 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4127 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4128 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4129 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4130 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4131 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4132 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4133 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4134 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4135 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_24(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4136 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4137 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4138 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4139 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4140 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4141 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4142 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4143 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4144 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4145 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4146 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4147 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4148 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4149 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4150 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4151 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4152 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4153 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4154 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4155 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4156 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4157 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4158 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4159 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4160 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4161 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4162 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4163 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4164 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4165 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4166 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4167 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4168 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4169 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4170 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4171 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4172 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4173 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4174 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4175 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4176 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4177 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4178 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4179 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4180 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4181 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4182 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_25(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4183 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4184 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4185 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4186 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4187 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4188 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4189 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4190 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4191 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4192 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4193 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4194 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4195 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4196 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4197 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4198 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4199 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4200 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4201 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4202 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4203 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4204 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4205 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4206 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4207 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4208 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4209 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4210 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4211 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4212 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4213 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4214 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4215 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4216 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4217 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4218 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4219 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4220 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4221 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4222 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4223 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4224 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4225 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4226 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4227 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4228 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4229 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_16(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4230 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4231 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4232 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4233 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4234 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4235 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4236 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4237 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4238 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4239 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4240 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4241 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4242 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4243 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4244 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4245 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4246 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4247 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4248 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4249 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4250 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4251 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4252 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4253 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4254 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4255 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4256 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4257 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4258 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4259 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4260 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4261 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4262 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4263 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4264 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4265 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4266 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4267 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4268 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4269 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4270 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4271 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4272 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4273 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4274 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4275 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4276 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArray_17(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4277 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4278 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4279 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4280 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4281 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4282 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4283 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4284 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4285 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4286 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4287 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4288 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4289 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4290 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4291 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4292 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4293 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4294 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4295 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4296 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4297 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4298 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4299 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4300 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4301 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4302 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4303 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4304 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4305 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4306 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4307 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4308 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4309 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4310 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4311 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4312 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4313 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4314 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4315 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4316 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4317 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4318 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4319 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4320 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4321 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4322 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4323 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_26(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4324 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4325 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4326 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4327 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4328 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4329 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4330 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4331 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4332 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4333 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4334 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4335 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4336 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4337 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4338 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4339 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4340 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4341 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4342 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4343 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4344 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4345 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4346 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4347 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4348 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4349 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4350 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4351 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4352 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4353 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4354 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4355 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4356 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4357 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4358 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4359 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4360 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4361 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4362 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4363 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4364 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4365 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4366 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4367 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4368 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4369 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4370 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_27(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4371 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4372 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4373 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4374 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4375 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4376 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4377 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4378 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4379 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4380 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4381 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4382 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4383 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4384 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4385 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4386 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4387 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4388 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4389 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4390 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4391 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4392 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4393 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4394 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4395 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4396 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4397 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4398 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4399 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4400 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4401 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4402 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4403 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4404 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4405 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4406 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4407 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4408 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4409 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4410 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4411 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4412 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4413 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4414 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4415 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4416 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4417 => [
				'arraySubsetHelper' => new KeyedArraySubsetHelper( Values::BOOLEAN_TRUE ),
				'array'             => Values::createArraySubset_28(),
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4418 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4419 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4420 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4421 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4422 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4423 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4424 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4425 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4426 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4427 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4428 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4429 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4430 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4431 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4432 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4433 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4434 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4435 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4436 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4437 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4438 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4439 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4440 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4441 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4442 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4443 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4444 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4445 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4446 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4447 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4448 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4449 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4450 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4451 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4452 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4453 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4454 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4455 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4456 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4457 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4458 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4459 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4460 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4461 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4462 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4463 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4464 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_0,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4465 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4466 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4467 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4468 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4469 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4470 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4471 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4472 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4473 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4474 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4475 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4476 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4477 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4478 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4479 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4480 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4481 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4482 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4483 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4484 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4485 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4486 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4487 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4488 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4489 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4490 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4491 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4492 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4493 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4494 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4495 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4496 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4497 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4498 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4499 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4500 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4501 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4502 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4503 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4504 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4505 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4506 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4507 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4508 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4509 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4510 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4511 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_1,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4512 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4513 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4514 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4515 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4516 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4517 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4518 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4519 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4520 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4521 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4522 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4523 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4524 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4525 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4526 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4527 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4528 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4529 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4530 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4531 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4532 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4533 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4534 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4535 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4536 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4537 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4538 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4539 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4540 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4541 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4542 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4543 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4544 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4545 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4546 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4547 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4548 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4549 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4550 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4551 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4552 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4553 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4554 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4555 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4556 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4557 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4558 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_2,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4559 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4560 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4561 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4562 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4563 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4564 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4565 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4566 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4567 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4568 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4569 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4570 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4571 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4572 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4573 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4574 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4575 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4576 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4577 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4578 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4579 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4580 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4581 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4582 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4583 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4584 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4585 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4586 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4587 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4588 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4589 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4590 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4591 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4592 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4593 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4594 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4595 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4596 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4597 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4598 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4599 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4600 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4601 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4602 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4603 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4604 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4605 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_3,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4606 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4607 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4608 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4609 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4610 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4611 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4612 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4613 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4614 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4615 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4616 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4617 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4618 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4619 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4620 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4621 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4622 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4623 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4624 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4625 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4626 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4627 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4628 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4629 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4630 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4631 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4632 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4633 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4634 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4635 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4636 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4637 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4638 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4639 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4640 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4641 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4642 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4643 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4644 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4645 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4646 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4647 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4648 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4649 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4650 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4651 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4652 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_4,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4653 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4654 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4655 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4656 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4657 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4658 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4659 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4660 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4661 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4662 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4663 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4664 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4665 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4666 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4667 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4668 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4669 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4670 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4671 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4672 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4673 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4674 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4675 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4676 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4677 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4678 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4679 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4680 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4681 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4682 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4683 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4684 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4685 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4686 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4687 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4688 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4689 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4690 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4691 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4692 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4693 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4694 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4695 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4696 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4697 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4698 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4699 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_5,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4700 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4701 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4702 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4703 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4704 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4705 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4706 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4707 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4708 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4709 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4710 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4711 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4712 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4713 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4714 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4715 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4716 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4717 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4718 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4719 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4720 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4721 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4722 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4723 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4724 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4725 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4726 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4727 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4728 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4729 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4730 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4731 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4732 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4733 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4734 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4735 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4736 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4737 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4738 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4739 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4740 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4741 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4742 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4743 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4744 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4745 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4746 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_6,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4747 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4748 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4749 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4750 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4751 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4752 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4753 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4754 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4755 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4756 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4757 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4758 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4759 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4760 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4761 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4762 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4763 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4764 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4765 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4766 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4767 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4768 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4769 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4770 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4771 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4772 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4773 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4774 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4775 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4776 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4777 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4778 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4779 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4780 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4781 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4782 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4783 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4784 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4785 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4786 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4787 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4788 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4789 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4790 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4791 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4792 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4793 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_7,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4794 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4795 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4796 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4797 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4798 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4799 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4800 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4801 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4802 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4803 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4804 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4805 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4806 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4807 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4808 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4809 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4810 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4811 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4812 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4813 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4814 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4815 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4816 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4817 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4818 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4819 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4820 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4821 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4822 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4823 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4824 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4825 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4826 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4827 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4828 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4829 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4830 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4831 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4832 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4833 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4834 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4835 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4836 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4837 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4838 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4839 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4840 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_8,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4841 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4842 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4843 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4844 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4845 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4846 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4847 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4848 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4849 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4850 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4851 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4852 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4853 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4854 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4855 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4856 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4857 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4858 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4859 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4860 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4861 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4862 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4863 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4864 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4865 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4866 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4867 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4868 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4869 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4870 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4871 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4872 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4873 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4874 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4875 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4876 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4877 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4878 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4879 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4880 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4881 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4882 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4883 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4884 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4885 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4886 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4887 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_9,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4888 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4889 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4890 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4891 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4892 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4893 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4894 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4895 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4896 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4897 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4898 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4899 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4900 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4901 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4902 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4903 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4904 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4905 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4906 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4907 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4908 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4909 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4910 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4911 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4912 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4913 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4914 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4915 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4916 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4917 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4918 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4919 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4920 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4921 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4922 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4923 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4924 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4925 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4926 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4927 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4928 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4929 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4930 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4931 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4932 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4933 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4934 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_10,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4935 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4936 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4937 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4938 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4939 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4940 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4941 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4942 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4943 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4944 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4945 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4946 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4947 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4948 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4949 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4950 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4951 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4952 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4953 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_6,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4954 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_7,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4955 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4956 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4957 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4958 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_11,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4959 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_12,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4960 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4961 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_14,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4962 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_15,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4963 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_16,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4964 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_17,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4965 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_12,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4966 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_13,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4967 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_18,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4968 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_19,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4969 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::ARRAY_SUBSET_20,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4970 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_14(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4971 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_15(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4972 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_21(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4973 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_22(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4974 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_23(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4975 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_24(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4976 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_25(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4977 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_16(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4978 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArray_17(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4979 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_26(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4980 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_27(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4981 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_11,
				'subset'            => Values::createArraySubset_28(),
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4982 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4983 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4984 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4985 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4986 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4987 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4988 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_6,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4989 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_7,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4990 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_8,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4991 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_9,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4992 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_10,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4993 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_11,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4994 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_0,
				'expectedResult'    => Values::BOOLEAN_TRUE
			],
			4995 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_1,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4996 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_2,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4997 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_3,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4998 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_4,
				'expectedResult'    => Values::BOOLEAN_FALSE
			],
			4999 => [
				'arraySubsetHelper' => new UnkeyedArraySubsetHelper( Values::BOOLEAN_FALSE ),
				'array'             => Values::ARRAY_SUBSET_0,
				'subset'            => Values::ARRAY_SUBSET_5,
				'expectedResult'    => Values::BOOLEAN_FALSE
			]
		];
	}
}
