<?php declare( strict_types = 1 );
namespace CodeKandis\PhpUnit\Tests\DataProviders\Unit\Constraints\ConstraintTest;

use CodeKandis\PhpUnit\Constraints\IsSubClassOfConstraint;
use CodeKandis\PhpUnit\Constraints\IsUnkeyedSubsetOfArrayConstraint;
use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\PhpUnit\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing constraints with value and expected result.
 * @package codekandis/phpunit
 * @author Christian Ramelow <info@codekandis.net>
 */
final readonly class ConstraintsWithValidValueAndExpectedResultDataProvider0019 implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			19000 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19001 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19002 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19003 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19004 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19005 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19006 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19007 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19008 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19009 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19010 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19011 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19012 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19013 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19014 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19015 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19016 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19017 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19018 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19019 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19020 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19021 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19022 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19023 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19024 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19025 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19026 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19027 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19028 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19029 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19030 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19031 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19032 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19033 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19034 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19035 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19036 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19037 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19038 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19039 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19040 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19041 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19042 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19043 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19044 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19045 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_7 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19046 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19047 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19048 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19049 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19050 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19051 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19052 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19053 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19054 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19055 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19056 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19057 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19058 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19059 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19060 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19061 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19062 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19063 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19064 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19065 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19066 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19067 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19068 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19069 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19070 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19071 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19072 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19073 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19074 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19075 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19076 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19077 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19078 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19079 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19080 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19081 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19082 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19083 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19084 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19085 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19086 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19087 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19088 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19089 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19090 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19091 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19092 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19093 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19094 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19095 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19096 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19097 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19098 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19099 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19100 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19101 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19102 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19103 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19104 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19105 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19106 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19107 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19108 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19109 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19110 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19111 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19112 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19113 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19114 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19115 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19116 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19117 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19118 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19119 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19120 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19121 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19122 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19123 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19124 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19125 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19126 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19127 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_8 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19128 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19129 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19130 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19131 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19132 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19133 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19134 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19135 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19136 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19137 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19138 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19139 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19140 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19141 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19142 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19143 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19144 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19145 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19146 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19147 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19148 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19149 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19150 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19151 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19152 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19153 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19154 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19155 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19156 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19157 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19158 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19159 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19160 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19161 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19162 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19163 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19164 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19165 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19166 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19167 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19168 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19169 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19170 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19171 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19172 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19173 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19174 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19175 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19176 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19177 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19178 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19179 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19180 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19181 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19182 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19183 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19184 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19185 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19186 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19187 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19188 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19189 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19190 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19191 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19192 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19193 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19194 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19195 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19196 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19197 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19198 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19199 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19200 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19201 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19202 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19203 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19204 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19205 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19206 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19207 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19208 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19209 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_9 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19210 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19211 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19212 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19213 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19214 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19215 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19216 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19217 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19218 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19219 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19220 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19221 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19222 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19223 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19224 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19225 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19226 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19227 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19228 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19229 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19230 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19231 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19232 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19233 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19234 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19235 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19236 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19237 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19238 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19239 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19240 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19241 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19242 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19243 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19244 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19245 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19246 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19247 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19248 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19249 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19250 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19251 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19252 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19253 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19254 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19255 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19256 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19257 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19258 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19259 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19260 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19261 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19262 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19263 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19264 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19265 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19266 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19267 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19268 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19269 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19270 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19271 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19272 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19273 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19274 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19275 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19276 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19277 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19278 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19279 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19280 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19281 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19282 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19283 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19284 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19285 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19286 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19287 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19288 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19289 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19290 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19291 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_10 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19292 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19293 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19294 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19295 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19296 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19297 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19298 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19299 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19300 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19301 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19302 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19303 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19304 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19305 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19306 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19307 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19308 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19309 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19310 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19311 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTERFACE_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19312 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::INTERFACE_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19313 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19314 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19315 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19316 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19317 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19318 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19319 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19320 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19321 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19322 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19323 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19324 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19325 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::CLASS_FQCN_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19326 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19327 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19328 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19329 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19330 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19331 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19332 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19333 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19334 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19335 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19336 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19337 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19338 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19339 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19340 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19341 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19342 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19343 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19344 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19345 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19346 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19347 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19348 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19349 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19350 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19351 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19352 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19353 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19354 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19355 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19356 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19357 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19358 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19359 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_2(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19360 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_3(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19361 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_4(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19362 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_5(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19363 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_6(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19364 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_7(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19365 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_8(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19366 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_9(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19367 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_10(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19368 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::createClassFixture_11(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19369 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19370 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19371 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19372 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19373 => [
				'constraint'     => new IsSubClassOfConstraint( Values::CLASS_FQCN_11 ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19374 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19375 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19376 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19377 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19378 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19379 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19380 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19381 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19382 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19383 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19384 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19385 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19386 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19387 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19388 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19389 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19390 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19391 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19392 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19393 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19394 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19395 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19396 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19397 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19398 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19399 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19400 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19401 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19402 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19403 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19404 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19405 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19406 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19407 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19408 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19409 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19410 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19411 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19412 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19413 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19414 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19415 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19416 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19417 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19418 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19419 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19420 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19421 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19422 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19423 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19424 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19425 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19426 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19427 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19428 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19429 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19430 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19431 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19432 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19433 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19434 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19435 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19436 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19437 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19438 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19439 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19440 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19441 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19442 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19443 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19444 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19445 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19446 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19447 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19448 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19449 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19450 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19451 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19452 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19453 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19454 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19455 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19456 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19457 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19458 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19459 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19460 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19461 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19462 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19463 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19464 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19465 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19466 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19467 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19468 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19469 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19470 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19471 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19472 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19473 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19474 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19475 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19476 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19477 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19478 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19479 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19480 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19481 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19482 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19483 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19484 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19485 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19486 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19487 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19488 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19489 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19490 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19491 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19492 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19493 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19494 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19495 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19496 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19497 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19498 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19499 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19500 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19501 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19502 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19503 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19504 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19505 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19506 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19507 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19508 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19509 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19510 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19511 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19512 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19513 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19514 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19515 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19516 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19517 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_0, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19518 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19519 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19520 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19521 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19522 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19523 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19524 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19525 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19526 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19527 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19528 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19529 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19530 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19531 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19532 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19533 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19534 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19535 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19536 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19537 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19538 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19539 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19540 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19541 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19542 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19543 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19544 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19545 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19546 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19547 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19548 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19549 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19550 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19551 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19552 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19553 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19554 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19555 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19556 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19557 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19558 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19559 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19560 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19561 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19562 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19563 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19564 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19565 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19566 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19567 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19568 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19569 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19570 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19571 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19572 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19573 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19574 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19575 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19576 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19577 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19578 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19579 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19580 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19581 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19582 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19583 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19584 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19585 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19586 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19587 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19588 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19589 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19590 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19591 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19592 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19593 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19594 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19595 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19596 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19597 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19598 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19599 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19600 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19601 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19602 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19603 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19604 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19605 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19606 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19607 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19608 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19609 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19610 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19611 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19612 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19613 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19614 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19615 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19616 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19617 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19618 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19619 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19620 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19621 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19622 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19623 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19624 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19625 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19626 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19627 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19628 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19629 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19630 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19631 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19632 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19633 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19634 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19635 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19636 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19637 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19638 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19639 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19640 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19641 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19642 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19643 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19644 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19645 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19646 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19647 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19648 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19649 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19650 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19651 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19652 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19653 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19654 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19655 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19656 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19657 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19658 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19659 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19660 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19661 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_1, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19662 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19663 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19664 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19665 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19666 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19667 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19668 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19669 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19670 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19671 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19672 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19673 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19674 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19675 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19676 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19677 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19678 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19679 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19680 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19681 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19682 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19683 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19684 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19685 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19686 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19687 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19688 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19689 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19690 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19691 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19692 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19693 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19694 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19695 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19696 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19697 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19698 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19699 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19700 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19701 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19702 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19703 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19704 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19705 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19706 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19707 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19708 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19709 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19710 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19711 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19712 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19713 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19714 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19715 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19716 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19717 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19718 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19719 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19720 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19721 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19722 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19723 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19724 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19725 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19726 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19727 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19728 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19729 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19730 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19731 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19732 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19733 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19734 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19735 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19736 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19737 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19738 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19739 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19740 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19741 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19742 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19743 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19744 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19745 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19746 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19747 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19748 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19749 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19750 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19751 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19752 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19753 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19754 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19755 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19756 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19757 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19758 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19759 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19760 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19761 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19762 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19763 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19764 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19765 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19766 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19767 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19768 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19769 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19770 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19771 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19772 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19773 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19774 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19775 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19776 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19777 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19778 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19779 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19780 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19781 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19782 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19783 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19784 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19785 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19786 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19787 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19788 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19789 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19790 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19791 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19792 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19793 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19794 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19795 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19796 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19797 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19798 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19799 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19800 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19801 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19802 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19803 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19804 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19805 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_2, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19806 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19807 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19808 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19809 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19810 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19811 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19812 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19813 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19814 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19815 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19816 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19817 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19818 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19819 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19820 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19821 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19822 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19823 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19824 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19825 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19826 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19827 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19828 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19829 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19830 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19831 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19832 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19833 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19834 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19835 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19836 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19837 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19838 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19839 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19840 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19841 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19842 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19843 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19844 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19845 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19846 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19847 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19848 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19849 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19850 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19851 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19852 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19853 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19854 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19855 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19856 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19857 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19858 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19859 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19860 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19861 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19862 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19863 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19864 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19865 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19866 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19867 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19868 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19869 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19870 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19871 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19872 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19873 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19874 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19875 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19876 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19877 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_FALSE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19878 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19879 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19880 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19881 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19882 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19883 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19884 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19885 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19886 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19887 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19888 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19889 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19890 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19891 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19892 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19893 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19894 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19895 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19896 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19897 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19898 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19899 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19900 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19901 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19902 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19903 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19904 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19905 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19906 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19907 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19908 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19909 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19910 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19911 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19912 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19913 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19914 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19915 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19916 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19917 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19918 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19919 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19920 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19921 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19922 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19923 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19924 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19925 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19926 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19927 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19928 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_15,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19929 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_16,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19930 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_17,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19931 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_0(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19932 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createClassFixture_1(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19933 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19934 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19935 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_18,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19936 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_19,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19937 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::ARRAY_SUBSET_20,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19938 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_14(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19939 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_15(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19940 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_21(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19941 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_22(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19942 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_23(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19943 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_24(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19944 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_25(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19945 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_16(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19946 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArray_17(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19947 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_26(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19948 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_27(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19949 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_3, Values::BOOLEAN_TRUE ),
				'value'          => Values::createArraySubset_28(),
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19950 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19951 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::NULL_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19952 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19953 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19954 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19955 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19956 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19957 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19958 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_FALSE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19959 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::BOOLEAN_INTEGER_STRING_TRUE,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19960 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19961 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19962 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19963 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTEGER_STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19964 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19965 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::FLOAT_STRING,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19966 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19967 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::STRING_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19968 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::INTERFACE_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19969 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_INTERFACE_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19970 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_0,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19971 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::CLASS_FQCN_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19972 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::UNKNOWN_CLASS_FQCN,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19973 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19974 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_1,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19975 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_2,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19976 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_3,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19977 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_4,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19978 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19979 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_6,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19980 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19981 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19982 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19983 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19984 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19985 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_0,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19986 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_1,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19987 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_2,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19988 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_3,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19989 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_4,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19990 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_5,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19991 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_6,
				'expectedResult' => Values::BOOLEAN_TRUE
			],
			19992 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_7,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19993 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_8,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19994 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_9,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19995 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_10,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19996 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_11,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19997 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_12,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19998 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_13,
				'expectedResult' => Values::BOOLEAN_FALSE
			],
			19999 => [
				'constraint'     => new IsUnkeyedSubsetOfArrayConstraint( Values::ARRAY_4, Values::BOOLEAN_FALSE ),
				'value'          => Values::ARRAY_SUBSET_14,
				'expectedResult' => Values::BOOLEAN_FALSE
			]
		];
	}
}
