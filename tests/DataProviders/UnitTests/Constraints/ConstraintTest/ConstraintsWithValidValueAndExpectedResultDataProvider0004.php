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
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0004 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			4000 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4001 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4002 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4003 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4004 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4005 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4006 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4007 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4008 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4009 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4010 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4011 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4012 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4013 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4014 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4015 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4016 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4017 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4018 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4019 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4020 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4021 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4022 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4023 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4024 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4025 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4026 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4027 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4028 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4029 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4030 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4031 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4032 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4033 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4034 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4035 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4036 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4037 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4038 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4039 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4040 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4041 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4042 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4043 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4044 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4045 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4046 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4047 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4048 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4049 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4050 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4051 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4052 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4053 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4054 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4055 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4056 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4057 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4058 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4059 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4060 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4061 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4062 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4063 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4064 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4065 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4066 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4067 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4068 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4069 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_6, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4070 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4071 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4072 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4073 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4074 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4075 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4076 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4077 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4078 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4079 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4080 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4081 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4082 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4083 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4084 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4085 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4086 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4087 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4088 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4089 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4090 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4091 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4092 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4093 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4094 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4095 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4096 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4097 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4098 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4099 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4100 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4101 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4102 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4103 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4104 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4105 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4106 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4107 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4108 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4109 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4110 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4111 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4112 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4113 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4114 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4115 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4116 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4117 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4118 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4119 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4120 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4121 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4122 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4123 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4124 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4125 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4126 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4127 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4128 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4129 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4130 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4131 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4132 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4133 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4134 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4135 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4136 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4137 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4138 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4139 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4140 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4141 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4142 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4143 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4144 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4145 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4146 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4147 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4148 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4149 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4150 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4151 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4152 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4153 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4154 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4155 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4156 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4157 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4158 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4159 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4160 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4161 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4162 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4163 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4164 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4165 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4166 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4167 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4168 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4169 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4170 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4171 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4172 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4173 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4174 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4175 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4176 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4177 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4178 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4179 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_7, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4180 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4181 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4182 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4183 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4184 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4185 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4186 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4187 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4188 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4189 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4190 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4191 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4192 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4193 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4194 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4195 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4196 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4197 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4198 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4199 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4200 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4201 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4202 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4203 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4204 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4205 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4206 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4207 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4208 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4209 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4210 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4211 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4212 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4213 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4214 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4215 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4216 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4217 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4218 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4219 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4220 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4221 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4222 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4223 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4224 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4225 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4226 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4227 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4228 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4229 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4230 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4231 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4232 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4233 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4234 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4235 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4236 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4237 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4238 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4239 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4240 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4241 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4242 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4243 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4244 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4245 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4246 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4247 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4248 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4249 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4250 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4251 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4252 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4253 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4254 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4255 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4256 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4257 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4258 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4259 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4260 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4261 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4262 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4263 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4264 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4265 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4266 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4267 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4268 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4269 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4270 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4271 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4272 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4273 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4274 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4275 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4276 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4277 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4278 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4279 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4280 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4281 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4282 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4283 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4284 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4285 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4286 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4287 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4288 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4289 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_8, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4290 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4291 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4292 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4293 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4294 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4295 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4296 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4297 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4298 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4299 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4300 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4301 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4302 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4303 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4304 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4305 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4306 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4307 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4308 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4309 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4310 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4311 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4312 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4313 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4314 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4315 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4316 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4317 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4318 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4319 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4320 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4321 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4322 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4323 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4324 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4325 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4326 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4327 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4328 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4329 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4330 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4331 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4332 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4333 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4334 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4335 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4336 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4337 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4338 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4339 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4340 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4341 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4342 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4343 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4344 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4345 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4346 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4347 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4348 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4349 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4350 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4351 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4352 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4353 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4354 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4355 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4356 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4357 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4358 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4359 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4360 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4361 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4362 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4363 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4364 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4365 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4366 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4367 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4368 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4369 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4370 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4371 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4372 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4373 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4374 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4375 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4376 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4377 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4378 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4379 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4380 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4381 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4382 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4383 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4384 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4385 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4386 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4387 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4388 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4389 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4390 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4391 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4392 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4393 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4394 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4395 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4396 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4397 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4398 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4399 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_9, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4400 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4401 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4402 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4403 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4404 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4405 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4406 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4407 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4408 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4409 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4410 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4411 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4412 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4413 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4414 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4415 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4416 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4417 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4418 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4419 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4420 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4421 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4422 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4423 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4424 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4425 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4426 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4427 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4428 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4429 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4430 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4431 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4432 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4433 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4434 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4435 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4436 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4437 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4438 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4439 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4440 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4441 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4442 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4443 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4444 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4445 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4446 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4447 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4448 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4449 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4450 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4451 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4452 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4453 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4454 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4455 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4456 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4457 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4458 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4459 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4460 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4461 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4462 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4463 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4464 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4465 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4466 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4467 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4468 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4469 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4470 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4471 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4472 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4473 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4474 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4475 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4476 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4477 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4478 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4479 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4480 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4481 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4482 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4483 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4484 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4485 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4486 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4487 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4488 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4489 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4490 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4491 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4492 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4493 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4494 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4495 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4496 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4497 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4498 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4499 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4500 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4501 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4502 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4503 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4504 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4505 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4506 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4507 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4508 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4509 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_10, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4510 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4511 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4512 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4513 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4514 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4515 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4516 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4517 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4518 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4519 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4520 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4521 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4522 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4523 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4524 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4525 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4526 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4527 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4528 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4529 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4530 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4531 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4532 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4533 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4534 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4535 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4536 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4537 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4538 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4539 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4540 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4541 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4542 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4543 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4544 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4545 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4546 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4547 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4548 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4549 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4550 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4551 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4552 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4553 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4554 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4555 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4556 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4557 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4558 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4559 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4560 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4561 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4562 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4563 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4564 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4565 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4566 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4567 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4568 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4569 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4570 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4571 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4572 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4573 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4574 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4575 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4576 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4577 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4578 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4579 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4580 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4581 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4582 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4583 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4584 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4585 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4586 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4587 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4588 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4589 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4590 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4591 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4592 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4593 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4594 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4595 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4596 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4597 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4598 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4599 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4600 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4601 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4602 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4603 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4604 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4605 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4606 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4607 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4608 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4609 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4610 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4611 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4612 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4613 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4614 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4615 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4616 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4617 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4618 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4619 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_11, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4620 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4621 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4622 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4623 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4624 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4625 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4626 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4627 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4628 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4629 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4630 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4631 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4632 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4633 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4634 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4635 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4636 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4637 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4638 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4639 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4640 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4641 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4642 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4643 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4644 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4645 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4646 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4647 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4648 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4649 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4650 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4651 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4652 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4653 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4654 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4655 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4656 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4657 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4658 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4659 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4660 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4661 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4662 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4663 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4664 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4665 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4666 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4667 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4668 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4669 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4670 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4671 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4672 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4673 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4674 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4675 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4676 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4677 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4678 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4679 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4680 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4681 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4682 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4683 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4684 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4685 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4686 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4687 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4688 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4689 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4690 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4691 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4692 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4693 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4694 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4695 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4696 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4697 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4698 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4699 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4700 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4701 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4702 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4703 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4704 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4705 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4706 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4707 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4708 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4709 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4710 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4711 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4712 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4713 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4714 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4715 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4716 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4717 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4718 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4719 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4720 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4721 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4722 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4723 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4724 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4725 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4726 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4727 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4728 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4729 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4730 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4731 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4732 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4733 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4734 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4735 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4736 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4737 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4738 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4739 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4740 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4741 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4742 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4743 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4744 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4745 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4746 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4747 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4748 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4749 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4750 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4751 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4752 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4753 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4754 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4755 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4756 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4757 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4758 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4759 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4760 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4761 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4762 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4763 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4764 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4765 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4766 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4767 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4768 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4769 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4770 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4771 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4772 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4773 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4774 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4775 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4776 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4777 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4778 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4779 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4780 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4781 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4782 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4783 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4784 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4785 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4786 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4787 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4788 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4789 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4790 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4791 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4792 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4793 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4794 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4795 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4796 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4797 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4798 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4799 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4800 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4801 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4802 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4803 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4804 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4805 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4806 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4807 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4808 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4809 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4810 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4811 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4812 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4813 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4814 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4815 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4816 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4817 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4818 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4819 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4820 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4821 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4822 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4823 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4824 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4825 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4826 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4827 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4828 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4829 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4830 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4831 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4832 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4833 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4834 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4835 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4836 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4837 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4838 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4839 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4840 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4841 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4842 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4843 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4844 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4845 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4846 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4847 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4848 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4849 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4850 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4851 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4852 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4853 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4854 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4855 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4856 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4857 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4858 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4859 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4860 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4861 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4862 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4863 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4864 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4865 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4866 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4867 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4868 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4869 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4870 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4871 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4872 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4873 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4874 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4875 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4876 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4877 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4878 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4879 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4880 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4881 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4882 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4883 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4884 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4885 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4886 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4887 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4888 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4889 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4890 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4891 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4892 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4893 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4894 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4895 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4896 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4897 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4898 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4899 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4900 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4901 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4902 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4903 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4904 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4905 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4906 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4907 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4908 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4909 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4910 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4911 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4912 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4913 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4914 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4915 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4916 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4917 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4918 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4919 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4920 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4921 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4922 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4923 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4924 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4925 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4926 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4927 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4928 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4929 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4930 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4931 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4932 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4933 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4934 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4935 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4936 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4937 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4938 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4939 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4940 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4941 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4942 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4943 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4944 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4945 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4946 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4947 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4948 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4949 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createImplementingClassFixture(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4950 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4951 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4952 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4953 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4954 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4955 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4956 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4957 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4958 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4959 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4960 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4961 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4962 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4963 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4964 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4965 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4966 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4967 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4968 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4969 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4970 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4971 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_NAME_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4972 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_NAME,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4973 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4974 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4975 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4976 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4977 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4978 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4979 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4980 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4981 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4982 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4983 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4984 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4985 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4986 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4987 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4988 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4989 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4990 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			4991 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4992 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4993 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4994 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4995 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4996 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4997 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4998 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			4999 => [
				'constraint'     => new ArrayContainsUnkeyedSubsetConstraint( Values::ARRAY_SUBSET_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
